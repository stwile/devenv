<?php
final class ParentClass {
    final public const CONSTANT = '定数値';
    final public function method() {
        echo '親クラスのメソッド';
    }
}

class ChildClass extends ParentClass {
    // 継承不可能なのでエラー
}