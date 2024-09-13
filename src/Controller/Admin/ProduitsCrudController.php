<?php

namespace App\Controller\Admin;

use App\Entity\Produits;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ProduitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produits::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        $fields = [
            ImageField::new('image','Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];

        $name = TextField::new('titre','Titre')
            ->setFormTypeOptions([
                'attr' => [
                    'maxlength' => 255
                ]
            ]);
        
        $subtitle = TextField::new('sousTitre','Sous-titre')
            ->setFormTypeOptions([
                'attr' => [
                    'maxlength'=>255
                ]
        ]);
        $description = TextEditorField::new('description','Description');
        $prix = NumberField::new('prix', 'Prix');
    

        $fields[] = $name; 
        $fields[] = $subtitle;
        $fields[] = $prix;
        $fields[] = $description;
        return $fields;
    }
    
}
