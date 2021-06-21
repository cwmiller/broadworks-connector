<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePolicyProfileKey
 *
 * The service policy profile key.
 *
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:20108","type":"sequence"}]
 */
class ServicePolicyProfileKey
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20108
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName category
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:20108
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory|null
     */
    private $category = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for category
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory
     */
    public function getCategory()
    {
        return $this->category instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->category;
    }

    /**
     * Setter for category
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory $category
     * @return $this
     */
    public function setCategory(\CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCategory()
    {
        $this->category = null;
        return $this;
    }


}

