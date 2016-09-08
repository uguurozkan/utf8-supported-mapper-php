<?php
/**
 * Created by PhpStorm.
 * User: milos.pejanovic
 * Date: 8/20/2016
 * Time: 10:10 AM
 */

namespace Validator\Rules;
use Common\ModelReflection\ModelProperty;
use Common\Util\Validation;
use Validator\IRule;

class DoubleArrayRule implements IRule {

    function getNames() {
        return ['double[]'];
    }

    function validate(ModelProperty $property, array $params = []) {
        Validation::validateArray($property->getPropertyValue());
        foreach($property->getPropertyValue() as $value) {
            Validation::validateDouble($value);
        }
    }
}