<?php
$age = 20;

if ($age >= 18) {
    echo '入場できます。';
} elseif ($age >= 13) {
    echo '保護者同伴で入場できます。';
} else {
    echo '入場できません。';
}
