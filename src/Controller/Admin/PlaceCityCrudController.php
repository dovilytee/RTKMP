<?php

namespace App\Controller\Admin;

use App\Entity\Place;
use App\Entity\PlaceCity;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PlaceCityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PlaceCity::class;
    }
    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('name', 'City Name'),
        ];
    }
}
