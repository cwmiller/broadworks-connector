<?php

namespace CWM\BroadWorksConnector\Ocip\Validation;

class InvalidChoiceException extends ValidationException
{
    public $object;

    /** @var string[] */
    public $options;

    /**
     * @param $object
     * @param array $options
     */
    public function __construct($object, array $options)
    {
        $this->object = $object;
        $this->options = $options;

        parent::__construct(
            sprintf(
                'Multiple options selected between %s on %s.',
                implode(', ', $this->group($options)), get_class($object)),
            ValidationException::CHOICE);
    }

    /**
     * @param string[] $options
     * @return string[]
     */
    private function group(array $options)
    {
        return array_map(function($option) {
            if (is_array($option)) {
                $option = sprintf('[%s]', implode(', ', $this->group($option)));
            }

            return $option;
        }, $options);
    }
}