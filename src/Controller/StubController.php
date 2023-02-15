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


use InvalidArgumentException;
use LetsCompose\Core\DataMapper\Mapper;
use LetsCompose\Core\Exception\ExceptionInterface;
use LetsCompose\Core\FileLoader\YamlFileLoader;
use LetsCompose\Core\HttpClient\Config\ConfigLoader;
use LetsCompose\Core\Object\User;
use LetsCompose\Core\Parser\StringPlaceholderResolver;
use LetsCompose\Core\Parser\YamlContentParser;
use LetsCompose\Core\Storage\FileSystem\FileStorage;
use LetsCompose\Core\Tools\ArrayHelper;
use LetsCompose\Core\Tools\Data\DataPropertyAccessor;
use LetsCompose\Core\Tools\Data\Hydrator;
use LetsCompose\Core\Tools\Storage\ResourceInfoHelper;
use LetsCompose\Core\Tools\StringHelper;
use LetsCompose\Core\Tools\SystemHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class StubController extends AbstractController
{
    /**
     * @return Response
     * @throws ExceptionInterface
     */
    #[Route('/stub', name: 'route_stub')]
    public function stub(): Response
    {
//
//         $a = [
//             'key1' => 'value1',
//             'Input' => ['sub_key1'=>'sub_value1'],
//         ];
//        $b = [
//            'Output' => ['sub_key2'=>'sub_value2']
//        ];
//
//        $c = [
//            'Output' => ['sub_key1'=>'sub_value2']
//        ];
//
//        $options = $a+$b;
//
//        dump(array_diff_key($c, $options));
//
//        die;


//        $user = new User();
//
//
//        $property = $user->getProperties()->getOne('firstName');
//        $user->getProperties()->remove($property);
//        dump($property);
//
//        dump($user, DataPropertyAccessor::objectToArray($user));
//
//        die;

//        $userInfo = SystemHelper::getUserInfoByUid(1000);
//        dump($userInfo);
//        die;

//        $storagePath = sprintf('%s/var/storage',$this->getParameter('kernel.project_dir'));
//        $storage = new FileStorage($storagePath);
//        $directory = $storage->initDirectory($file->getDirectoryPath());
//        $fileInfo = $storage->getInfo($directory);
//        $file = $storage->initFile('test-one.data');
//        dump($fileInfo);


        $fileLoader = YamlFileLoader::getInstance(sprintf('%s/var/storage/HttpClient',$this->getParameter('kernel.project_dir')));
        $parser = new YamlContentParser($fileLoader);
        $content = $parser->parseFile('client-config.yaml');

        $clientConfigLoader = new ConfigLoader();
        $config = $clientConfigLoader->load($content);
        dump($content);

        die;
//
//        $data = [
//            'key_one' => 'key_one_value',
//            'key_two' => 'key_two_value',
//            'key_three' => [
//                'key_a' => 'key_a_value'
//            ],
//        ];
//
//        $mapper = Mapper::create($mappingConfig);
//
//        $mappedContent = $mapper->map('schema-two', $data);
//
//        dump($mappedContent);
//        die;

//        $content = $fileLoader->getContents('test-child.yaml');
//
//        $contentParams = [
//            'param1' => 'value1',
//            'param2' => 'value2',
//            'import_file' => 'test-import-01.yaml',
//        ];
//
//
//        $parser = new YamlContentParser($fileLoader);
//        $parser->setContentPlaceholderParameters($contentParams);
//        $content = $parser->parseFile('test-child.yaml');
//        dump($content);

//        $tsStart = floor(microtime(true) * 1000);
//        for ($i = 0; $i < 1000; $i++) {
//            $content = $parser->parseFile('test-child.yaml');
//            dump($content);
//            die();
//        }
//        $tsEnd = floor(microtime(true) * 1000);
//        $first = $tsEnd-$tsStart;
//
//
//        return new Response(sprintf('execution time [%s]', $first));


//
//        $directory = $storage->initDirectory($file->getDirectoryPath());
//
//        dump(stat($storage->getFullPath($directory)));


//        $info = SystemHelper::getUserInfoByUid(1000);
//        dump($info);
//        $directory = $storage->getFullPath($directory);
//        dump(ResourceInfoHelper::getResourceInfo($directory));

        die();
        $directory = $storage->open($directory);

        dump($directory, 'directory read');

        foreach ($storage->read($directory) as $record)
        {
            dump($record);
        }

        dump('-----');

        foreach ($storage->read($directory) as $record)
        {
            dump($record);
        }

//        while ($record = $storage->read($directory))
//        {
//            dump($record);
//        }


//        try {
//            $file = $storage->initFile('test.data');
//            $file = $storage->open($file);
//        } catch (FileNotFoundException) {
//            $file = $storage->create($file);
//        }

//        dump($file);

//        while ($data = $storage->read($file))
//        {
//            dump($data);
//        }
//
        foreach ($storage->readLine($file) as $line)
        {
            dump(trim($line));
        }


//        $file = $storage->open($file);
//        $test = $storage->read($file);
//        dump($test);
//
//        $file = $storage->refreshFileInfo($file);
//
//        dump($file);

//        while ($data = $storage->read($file, $file->getSize()))
//        {
//            dump($data);
//        }
//
//        foreach ($storage->readLine() as $line)
//        {
//            dump($line);
//        }
die;
        return new Response(sha1(microtime()));
    }

    /**
     * @return Response
     * @throws ExceptionInterface
     */
    #[Route('/stub/stuff', name: 'route_stub_stuff')]
    public function stubStuff(): Response
    {
//        public $propertyA = 'defaultA';
//        public $propertyB = 'defaultB';
//        public $propertyC = 'defaultC';
//        private $propertyD = 'defaultD';
//        private $propertyE = 'defaultE';

        $data = [
            'propertyA' => 'overwrite_a',
            'propertyB' => 'overwrite_b',
            'propertyC' => 'overwrite_c',
            'propertyD' => 'overwrite_d',
            'propertyE' => 'overwrite_e',
            'property_e' => 'overwrite_e',
            'property-f' => 'overwrite-f',
        ];

        $data = array_flip($data);
        dump(ArrayHelper::kebabKeysToCamelCase($data));

        die;
        $tmpObj = new Test();
        $tsStart = floor(microtime(true) * 1000);
        for ($i = 0; $i < 1000000; $i++) {
//            $str = StringHelper::fillPlaceHolders('hello %propertyA% from %propertyB%', $data, StringHelper::PLACEHOLDER_TOKEN_PERCENT);
//            $object = Hydrator::hydrate(Test::class, $data);
//            $object = Hydrator::hydrate($tmpObj, $data, true);
//            $object = DataPropertyAccessor::objectToArray($object);
//            dump($object);
//            die;
        }
        $tsEnd = floor(microtime(true) * 1000);
        $first = $tsEnd-$tsStart;

//        $tsStart = floor(microtime(true) * 1000);
//        for ($i = 0; $i < 1000000; $i++) {
//            $object = Hydrator::hydrate(Test::class, $data);
//        }
//        $tsEnd = floor(microtime(true) * 1000);
//        $second = $tsEnd-$tsStart;
        $second = 0;


//        dump($object);

        return new Response(sprintf('execution time [%s] / [%s]', $first, $second));
        die('coucou');

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