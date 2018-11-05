<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterAnnouncementURLListModify
 *
 * Contains a list of URLs for modify.
 */
class CallCenterAnnouncementURLListModify
{

    /**
     * @ElementName url1
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url1 = null;

    /**
     * @ElementName url2
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url2 = null;

    /**
     * @ElementName url3
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url3 = null;

    /**
     * @ElementName url4
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $url4 = null;

    /**
     * Getter for url1
     *
     * @ElementName url1
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUrl1()
    {
        return $this->url1;
    }

    /**
     * Setter for url1
     *
     * @ElementName url1
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $url1
     * @return $this
     */
    public function setUrl1($url1)
    {
        $this->url1 = $url1;
        return $this;
    }

    /**
     * Getter for url2
     *
     * @ElementName url2
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUrl2()
    {
        return $this->url2;
    }

    /**
     * Setter for url2
     *
     * @ElementName url2
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $url2
     * @return $this
     */
    public function setUrl2($url2)
    {
        $this->url2 = $url2;
        return $this;
    }

    /**
     * Getter for url3
     *
     * @ElementName url3
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUrl3()
    {
        return $this->url3;
    }

    /**
     * Setter for url3
     *
     * @ElementName url3
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $url3
     * @return $this
     */
    public function setUrl3($url3)
    {
        $this->url3 = $url3;
        return $this;
    }

    /**
     * Getter for url4
     *
     * @ElementName url4
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getUrl4()
    {
        return $this->url4;
    }

    /**
     * Setter for url4
     *
     * @ElementName url4
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $url4
     * @return $this
     */
    public function setUrl4($url4)
    {
        $this->url4 = $url4;
        return $this;
    }


}

