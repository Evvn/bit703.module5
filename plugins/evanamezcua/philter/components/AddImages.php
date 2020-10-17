<?php namespace Evanamezcua\Philter\Components;

use Auth;
use Input;
use Flash;
use Redirect;
use Cms\Classes\ComponentBase;
use Evanamezcua\Philter\Models\Image as ImageModel;
use Evanamezcua\Philter\Models\Tag as TagModel;

class AddImages extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'AddImages Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function addImage()
    {
        $image = new ImageModel();
        $image->name = Input::get('title');
        $image->description = Input::get('description');
        $image->user = Auth::getUser();
        $image->image = Input::get('image');
        $image->filter = Input::get('filter');
        $image->save();
        $tags = Input::get('tags');
        $tag_array = explode(', ', $tags); // like JS string.split(', ');
        $tag_models = [];
        foreach ($tag_array as $tag) {
            $tag = ucfirst(strtolower(trim($tag)));
            $tag_models[] = TagModel::getTag($tag);
        }
        $image->tags()->attach($tag_models);
        $image->save();
        Flash::success('Your image has been uploaded');
        return Redirect::back();
    }

    // i think this goes here? maybe in Tag.php instead?
    // adds new tag or returns existing tag
    public function scopeGetTag($query, $new_tag)
    {
        $tag = Tag::where('tag', '=', $new_tag)->first();
        if ($tag == null) {
            $tag = new Tag();
            $tag->tag = $new_tag;
            $tag->save();
        }
        return $tag->id;
    }
}
