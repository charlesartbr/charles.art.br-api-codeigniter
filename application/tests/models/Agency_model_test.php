<?php

class Agency_model_test extends TestCase
{
    public function setUp()
    {
        $this->obj = $this->newModel('Agency_model');
    }

    public function test_get_all()
    {
        $expected = [
            1 => 'TheMediaGroup',
            2 => 'Innova - All Around the Brand',
            3 => 'Brado Comunicação',
            4 => 'NYU Creative'
        ];

        $list = $this->obj->get_all();

        foreach ($list as $agency) 
        {
            $this->assertEquals($expected[$agency->AgencyId], $agency->Name);
        }
    }

    public function test_get_name()
    {
        $actual = $this->obj->get(1);

        $expected = 'TheMediaGroup';

        $this->assertEquals($expected, $actual->Name);
    }
}