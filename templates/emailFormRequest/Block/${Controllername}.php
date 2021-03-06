<?php
/**
 * ${Controllername}
 *
 * @copyright Copyright (c) ${commentsYear} ${CommentsCompanyName}
 * @author    ${commentsUserEmail}
 */

namespace ${Vendorname}\${Modulename}\Block;

use Magento\Framework\View\Element\Template;

class ${Controllername} extends Template
{
    /**
     * @var string $_template
     */
    protected $_template = "${controllername}.phtml";

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('${vendorname}_${modulename}/${controllername}/post', ['_secure' => true]);
    }
}