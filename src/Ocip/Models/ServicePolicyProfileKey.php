<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePolicyProfileKey
 *
 * The service policy profile key.
 */
class ServicePolicyProfileKey
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName category
     * @var \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory|null
     */
    private $category = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for category
     *
     * @ElementName category
     * @return \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory|null
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter for category
     *
     * @ElementName category
     * @param \CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory|null $category
     * @return $this
     */
    public function setCategory(\CWM\BroadWorksConnector\Ocip\Models\ServicePolicyProfileCategory $category)
    {
        $this->category = $category;
        return $this;
    }


}

