<?php
namespace App\Repositories;

use App\Interface\ContactInterface;
use App\Models\Contact;
use App\Repositories\BaseRepository;

class ContactRepository extends BaseRepository implements ContactInterface
{

    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }

}



