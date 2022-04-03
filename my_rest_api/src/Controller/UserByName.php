<?php
 
namespace App\Controller;
 
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
 
#[AsController]
class UserByName extends AbstractController
{
    public function __invoke(string $name)
    {
        $foundUser = $this->getDoctrine()->getRepository(User::class)->findBy(['name' => $name]);
 
        if (!$foundUser) {
            throw $this->createNotFoundException('Didnt find user with name'. $name);
        }
 
        return $foundUser;
    }
}