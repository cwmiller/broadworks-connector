<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CallCenterReportTemplateKey
 *
 * Uniquely identifies a call center report template created in the system.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:714","type":"sequence"}]
 */
class CallCenterReportTemplateKey
{

    /**
     * @ElementName templateLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel
     * @Group 8e629edbac315ae7889caca732382c44:714
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel|null
     */
    private $templateLevel = null;

    /**
     * @ElementName templateName
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:714
     * @var string|null
     */
    private $templateName = null;

    /**
     * Getter for templateLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel
     */
    public function getTemplateLevel()
    {
        return $this->templateLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateLevel;
    }

    /**
     * Setter for templateLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel $templateLevel
     * @return $this
     */
    public function setTemplateLevel(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportTemplateLevel $templateLevel)
    {
        $this->templateLevel = $templateLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateLevel()
    {
        $this->templateLevel = null;
        return $this;
    }

    /**
     * Getter for templateName
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->templateName;
    }

    /**
     * Setter for templateName
     *
     * @param string $templateName
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTemplateName()
    {
        $this->templateName = null;
        return $this;
    }


}

