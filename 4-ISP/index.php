<?php

interface CodeableInterface
{

    public function code();

}

interface TestableInterface
{

    public function test();

}

class Developer implements CodeableInterface , TestableInterface
{

    public function code()
    {
        echo "Exactly right, i'm coding";
    }

    public function test()
    {
        echo "testing in localhost";
    }

}

class Tester implements TestableInterface
{

    public function test()
    {
        echo "testing in main server";
    }

}

class ProjectManager
{

    public function processCode(CodeableInterface $member)
    {
        return $member->code();
    }

    public function processTest(TestableInterface $member)
    {
        return $member->test();
    }

}

$projectManager = new ProjectManager();

var_dump($projectManager->processCode(new Developer()));
var_dump($projectManager->processTest(new Developer()));
var_dump($projectManager->processTest(new Tester()));