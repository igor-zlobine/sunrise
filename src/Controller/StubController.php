<?php
/*
 * This file is part of the LestCompose/Core package.
 *
 * (c) Igor ZLOBINE <izlobine@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class StubController extends AbstractController
{
    #[Route('/stub', name: 'route_stub')]
    public function stub(): Response
    {
        return new Response(sha1(microtime()));
    }

}

class test {
    public $propertyA = 'defaultA';
    public $propertyB = 'defaultB';
    public $propertyC = 'defaultC';
    private $propertyD = 'defaultD';
    private $propertyE = 'defaultE';

    /**
     * @return string
     */
    public function getPropertyB(): string
    {
        return $this->propertyB;
    }

    public function getCoucou(string $coucou): string
    {
        return $coucou;
    }

    /**
     * @param string $propertyB
     * @return test
     */
    public function setPropertyB(string $propertyB): test
    {
        $this->propertyB = 'set_'.$propertyB;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyC(): string
    {
        return microtime();
        return $this->propertyC;
    }

    /**
     * @param string $propertyC
     * @return test
     */
    public function setPropertyC(string $propertyC): test
    {
        $this->propertyC = 'set_'.$propertyC;
        return $this;
    }

    /**
     * @return string
     */
    public function getPropertyD(): string
    {
        return $this->propertyD;
    }

    /**
     * @param string $propertyD
     * @return test
     */
    public function setPropertyD(string $propertyD): test
    {
        $this->propertyD = 'set_'.$propertyD;
        return $this;
    }

};