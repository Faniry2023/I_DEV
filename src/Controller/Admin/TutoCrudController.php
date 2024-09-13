<?php

namespace App\Controller\Admin;

use App\Entity\Tuto;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class TutoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tuto::class;
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

        $name = TextField::new('name','Titre')
            ->setFormTypeOptions([
                'attr' => [
                    'maxlength' => 255
                ]
            ]);
        
        $subtitle = TextField::new('subtitle','Sous-titre')
            ->setFormTypeOptions([
                'attr' => [
                    'maxlength'=>255
                ]
        ]);
        $description = TextEditorField::new('description','Description');
        $prix = TextField::new('prix', 'Prix')->setFormTypeOptions(['empty_data' => '', 'attr' => ['type' => 'number', 'step' => '0.01']])
        ->addCssClass('text-left')
        ->formatValue(function ($value) {
            // Convertir le prix en float avant de l'afficher
            return number_format((float)$value, 2, ',', '');
        });
    

        $fields[] = $name; 
        $fields[] = $subtitle;
        $fields[] = $prix;
        $fields[] = $description;
        return $fields;
    }
    
}
