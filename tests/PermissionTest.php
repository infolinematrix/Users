<?php


class PermissionTest extends TestBase {

    /** @test */
    function it_is_instantiatible()
    {
        $this->assertInstanceOf(
            'Reactor\Users\Permission',
            new Reactor\Users\Permission
        );
    }

}