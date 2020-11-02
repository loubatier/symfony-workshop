<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class IndexController
{
    public function greetings(): Response
    {
        $greeting = "Adrien";

        return new Response(
            '<html><body>Hello '.$greeting.'</body></html>'
        );
    }
}
