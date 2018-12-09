<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePolicyProfileKey
 *
 * The service policy profile key.
 *
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:17537","type":"sequence"}]
 */
class ServicePolicyProfileKey
{

    /**
     * @ElementName name
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:17537
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName category
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory
     * @Group b5f5416d9e71f8e4246cda16c4723744:17537
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

