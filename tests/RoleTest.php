<?php


class RoleTest extends TestBase {

    /** @test */
    function it_is_instantiatible()
    {
        $this->assertInstanceOf(
            'Reactor\Users\Role',
            new Reactor\Users\Role
        );
    }

}