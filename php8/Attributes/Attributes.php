<?php

/**
 * Attribute harus menggunakan #[Attribute]
 * pembacaan attribut via reflection
 */

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank {
    
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

// penggunaan
class LoginRequest
{
    #[Length(min: 4, max: 16)]
    #[NotBlank]
    public string $username;

    #[Length(min: 8, max: 32)]
    #[NotBlank]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name is null");
        }
        if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name is null");
        }
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return;
    }

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);

    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if ($valueLength < $length->min) {
            throw new Exception("Property $property->name is too short");
        }
        if ($valueLength > $length->max) {
            throw new Exception("Property $property->name is too long");
        }
    }
}

$request = new LoginRequest();
$request->username = "febrian";
$request->password = "hlk23j**";
validate($request);