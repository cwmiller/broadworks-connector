<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

use \RuntimeException;

abstract class Group
{
    /** @var string */
    private $id;

    /** @var Group[] */
    private $children = [];

    /**
     * @param $array
     * @return Group
     */
    public static function fromArray($array)
    {
        if (!isset($array['type'])) {
            throw new RuntimeException('Array doesn\'t contain type key.');
        }

        $obj = null;

        switch ($array['type']) {
            case 'sequence':
                $obj = new Sequence();
                break;
            case 'choice':
                $obj = (new Choice())
                    ->setIsOptional(isset($array['optional']) && $array['optional']);
                break;
            default:
                throw new RuntimeException('Unknown group type: ' . $array['type']);
        }

        return $obj
            ->setId($array['id'])
            ->setChildren(array_map(function($children) {
                return self::fromArray($children);
            }, isset($array['children']) ? $array['children'] : []));
    }

    /**
     * @param $instance
     * @throws ValidationException
     */
    abstract public function validate($instance);

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Group
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Group[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param Group[] $children
     * @return Group
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }
}