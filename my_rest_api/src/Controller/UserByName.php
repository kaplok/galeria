<?php
 
namespace App\Controller;
 
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Doctrine\Persistence\ManagerRegistry;

#[AsController]
class UserByName extends AbstractController
{
   // private $doctrine;

    public function __construct(private ManagerRegistry $doctrine) {
    //$this->doctrine = $doctrine;
    
    }

    public function __invoke(string $name)
    {
        $foundUser = $this->getDoctrine()->getRepository(User::class)->findBy(['name' => $name]);
 
        if (!$foundUser) {
            throw $this->createNotFoundException('Didnt find user with name'. $name);
        }
 
        return $foundUser;
    }

    private function getDoctrine()
    {
        return $this->doctrine;
    }


}