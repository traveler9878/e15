<?php
namespace App\Actions\Note;

use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class StoreNewNote{


    public function __construct($user_name
    , $summary
    ,  $rating
    , $hashtags
    , $detail
    , $is_active){
        $note = new Note();
        $note->user_name = $user_name;
        $note->short_description = $summary;
        $note->rating = $rating;
        $note->long_description = $detail;
        $note->hashtag_list = $hashtags;
        $note->is_active = $is_active;
        $note->save();

    }

}