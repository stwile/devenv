<?php

class ParentClass {
    public function __construct() {
        echo "親クラスのコンストラクタ\n";
    }

    public function __destruct() {
        echo "親クラスのデストラクタ\n";
    }
}

class ChildClass extends ParentClass {
    public function __construct() {
        parent::__construct();
        echo "子クラスのコンストラクタ\n";
    }

    public function __destruct() {
        echo "子クラスのデストラクタ\n";
        parent::__destruct();
    }
}

$obj = new ChildClass();
unset($obj);
