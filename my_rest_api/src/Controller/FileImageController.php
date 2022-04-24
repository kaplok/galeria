<?php

namespace App\Controller;

use App\Service\FileService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;
#[AsController]
#[Route(path: "/image/{imageName}", name: "file_controller")]
class FileImageController extends AbstractController {

    public function __invoke($imageName) {
        return new BinaryFileResponse(FileService::GALERIA_PATH.FileService::FILES_PATH . "/" . $imageName);
    }
}
