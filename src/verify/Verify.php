<?php
// +----------------------------------------------------------------------
// | Base64 ¼ÓÃÜÊµÏÖÀà
// +----------------------------------------------------------------------
// | Author: ¬g¬g <yzmguanguan@gmail.com>
// +----------------------------------------------------------------------
namespace guanguans\library\verify;

class Verify
{
    protected $config = array(
        'seKey'    => 'ThinkPHP.CN', // ÑéÖ¤Âë¼ÓÃÜÃÜÔ¿
        'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY', // ÑéÖ¤Âë×Ö·û¼¯ºÏ
        'expire'   => 1800, // ÑéÖ¤Âë¹ýÆÚÊ±¼ä£¨s£©
        'useZh'    => false, // Ê¹ÓÃÖÐÎÄÑéÖ¤Âë
        'zhSet'    => 'ÃÇÒÔÎÒµ½Ëû»á×÷Ê±Òª¶¯¹ú²úµÄÒ»ÊÇ¹¤¾ÍÄê½×Òå·¢³É²¿Ãñ¿É³öÄÜ·½½øÔÚÁË²»ºÍÓÐ´óÕâÖ÷ÖÐÈËÉÏÎªÀ´·ÖÉú¶ÔÓÚÑ§ÏÂ¼¶µØ¸öÓÃÍ¬ÐÐÃæËµÖÖ¹ýÃü¶È¸ï¶ø¶à×Óºó×ÔÉç¼ÓÐ¡»úÒ²¾­Á¦Ïß±¾µç¸ßÁ¿³¤µ³µÃÊµ¼Ò¶¨Éî·¨±í×ÅË®Àí»¯ÕùÏÖËù¶þÆðÕþÈýºÃÊ®Õ½ÎÞÅ©Ê¹ÐÔÇ°µÈ·´ÌåºÏ¶·Â·Í¼°Ñ½áµÚÀïÕýÐÂ¿ªÂÛÖ®Îï´Óµ±Á½Ð©»¹Ìì×ÊÊÂ¶ÓÅúµãÓýÖØÆäË¼Óë¼äÄÚÈ¥Òò¼þÈÕÀûÏàÓÉÑ¹Ô±ÆøÒµ´úÈ«×éÊý¹ûÆÚµ¼Æ½¸÷»ù»òÔÂÃ«È»ÈçÓ¦ÐÎÏëÖÆÐÄÑù¸É¶¼Ïò±ä¹ØÎÊ±ÈÕ¹ÄÇËü×î¼°ÍâÃ»¿´ÖÎÌáÎå½âÏµÁÖÕßÃ×ÈºÍ·ÒâÖ»Ã÷ËÄµÀÂíÈÏ´ÎÎÄÍ¨µ«Ìõ½Ï¿ËÓÖ¹«¿×Áì¾üÁ÷Èë½ÓÏ¯Î»ÇéÔËÆ÷²¢·ÉÔ­ÓÍ·ÅÁ¢ÌâÖÊÖ¸½¨ÇøÑé»îÖÚºÜ½Ì¾öÌØ´Ë³£Ê¯Ç¿¼«ÍÁÉÙÒÑ¸ù¹²Ö±ÍÅÍ³Ê½×ª±ðÔìÇÐ¾ÅÄãÈ¡Î÷³Ö×ÜÁÏÁ¬ÈÎÖ¾¹Ûµ÷ÆßÃ´É½³Ì°Ù±¨¸ü¼û±ØÕæ±£ÈÈÎ¯ÊÖ¸Ä¹Ü´¦¼º½«ÐÞÖ§Ê¶²¡Ïó¼¸ÏÈÀÏ¹â×¨Ê²ÁùÐÍ¾ßÊ¾¸´°²´øÃ¿¶«ÔöÔòÍê·ç»ØÄÏ¹ãÀÍÂÖ¿Æ±±´ò»ý³µ¼Æ¸ø½Ú×öÎñ±»ÕûÁª²½Àà¼¯ºÅÁÐÎÂ×°¼´ºÁÖªÖáÑÐµ¥É«¼á¾ÝËÙ·ÀÊ·À­ÊÀÉè´ï¶û³¡Ö¯Àú»¨ÊÜÇó´«¿Ú¶Ï¿ö²É¾«½ð½çÆ·ÅÐ²Î²ãÖ¹±ßÇåÖÁÍòÈ·¾¿ÊéÊõ×´³§ÐëÀëÔÙÄ¿º£½»È¨ÇÒ¶ùÇà²ÅÖ¤µÍÔ½¼Ê°ËÊÔ¹æË¹½ü×¢°ì²¼ÃÅÌúÐè×ßÒéÏØ±ø¹Ì³ý°ãÒý³ÝÇ§Ê¤Ï¸Ó°¼Ã°×¸ñÐ§ÖÃÍÆ¿ÕÅäµ¶Ò¶ÂÊÊö½ñÑ¡ÑøµÂ»°²é²î°ëµÐÊ¼Æ¬Ê©ÏìÊÕ»ª¾õ±¸ÃûºìÐø¾ùÒ©±ê¼ÇÄÑ´æ²âÊ¿Éí½ôÒºÅÉ×¼½ï½Ç½µÎ¬°åÐíÆÆÊö¼¼Ïûµ×´²ÌïÊÆ¶Ë¸ÐÍùÉñ±ãºØ´å¹¹ÕÕÈÝ·Ç¸ãÑÇÄ¥×å»ð¶ÎËãÊÊ½²°´ÖµÃÀÌ¬»ÆÒ×±ë·þÔç°àÂóÏ÷ÐÅÅÅÌ¨Éù¸Ã»÷ËØÕÅÃÜº¦ºî²ÝºÎÊ÷·Ê¼ÌÓÒÊôÊÐÑÏ¾¶ÂÝ¼ì×óÒ³¿¹ËÕÏÔ¿àÓ¢¿ì³Æ»µÒÆÔ¼°Í²ÄÊ¡ºÚÎäÅàÖøºÓµÛ½öÕëÔõÖ²¾©ÖúÉýÍõÑÛËý×¥º¬Ãç¸±ÔÓÆÕÌ¸Î§Ê³ÉäÔ´ÀýÖÂËá¾ÉÈ´³ä×ã¶Ì»®¼ÁÐû»·ÂäÊ×³ß²¨³Ð·Û¼ù¸®ÓãËæ¿¼¿Ì¿¿¹»Âú·òÊ§°ü×¡´ÙÖ¦¾Ö¾ú¸ËÖÜ»¤ÑÒÊ¦¾ÙÇú´ºÔª³¬¸ºÉ°·â»»Ì«Ä£Æ¶¼õÑôÑï½­ÎöÄ¶Ä¾ÑÔÇò³¯Ò½Ð£¹ÅÄØµ¾ËÎÌýÎ¨Êä»¬Õ¾ÁíÎÀ×Ö¹Ä¸ÕÐ´ÁõÎ¢ÂÔ·¶¹©°¢¿éÄ³¹¦Ì×ÓÑÏÞÏîÓàµ¹¾í´´ÂÉÓêÈÃ¹ÇÔ¶°ï³õÆ¤²¥ÓÅÕ¼ËÀ¶¾È¦Î°¼¾Ñµ¿Ø¼¤ÕÒ½ÐÔÆ»¥¸úÁÑÁ¸Á£Ä¸Á·Èû¸Ö¶¥²ßË«ÁôÎó´¡Îü×è¹Ê´ç¶ÜÍíË¿Å®É¢º¸¹¦ÖêÇ×ÔºÀä³¹µ¯´íÉ¢ÉÌÊÓÒÕÃð°æÁÒÁãÊÒÇáÑª±¶È±Àå±Ã²ì¾ø¸»³Ç³åÅçÈÀ¼ò·ñÖùÀîÍûÅÌ´ÅÐÛËÆÀ§¹®ÒæÖÞÍÑÍ¶ËÍÅ«²àÈó¸Ç»Ó¾à´¥ÐÇËÉËÍ»ñÐË¶À¹Ù»ì¼ÍÒÀÎ´Í»¼Ü¿í¶¬ÕÂÊªÆ«ÎÆ³ÔÖ´·§¿óÕ¯ÔðÊìÎÈ¶áÓ²¼ÛÅ¬·­Ææ¼×Ô¤Ö°ÆÀ¶Á±³Ð­ËðÃÞÇÖ»ÒËäÃ¬ºñÂÞÄà±Ù¸æÂÑÏäÕÆÑõ¶÷°®Í£ÔøÈÜÓªÖÕ¸ÙÃÏÇ®´ý¾¡¶íËõÉ³ÍË³ÂÌÖ·ÜÐµÔØ°ûÓ×ÄÄ°þÆÈÐýÕ÷²Ûµ¹ÎÕµ£ÈÔÑ½ÏÊ°É¿¨´Ö½é×êÖðÈõ½ÅÅÂÑÎÄ©Òõ·áÎí¹Ú±û½ÖÀ³±´·ø³¦¸¶¼ªÉøÈð¾ª¶Ù¼·ÃëÐüÄ·ÀÃÉ­ÌÇÊ¥°¼ÌÕ´Ê³Ù²ÏÒÚ¾Ø¿µ×ñÄÁÔâ·ùÔ°Ç»¶©ÏãÈâµÜÎÝÃô»ÖÍü±àÓ¡·ä¼±ÄÃÀ©ÉË·ÉÂ¶ºËÔµÓÎÕñ²ÙÑëÎéÓòÉõÑ¸»ÔÒìÐòÃâÖ½Ò¹Ïç¾ÃÁ¥¸×¼ÐÄîÀ¼Ó³¹µÒÒÂðÈåÉ±ÆûÁ×¼è¾§²å°£È¼»¶Ìú²¹ÔÛÑ¿ÓÀÍßÇãÕóÌ¼ÑÝÍþ¸½ÑÀÑ¿ÓÀÍßÐ±¹àÅ·Ï×Ë³ÖíÑó¸¯ÇëÍ¸Ë¾Î£À¨ÂöÒËÐ¦ÈôÎ²Êø×³±©Æó²ËËë³þººÓúÂÌÍÏÅ£·ÝÈ¾¼ÈÇï±é¶ÍÓñÏÄÁÆ¼âÖ³¾®·ÑÖÝ·Ã´µÈÙÍ­ÑØÌæ¹ö¿ÍÕÙºµÎò´ÌÄÔ´ë¹á²Ø¸ÒÁîÏ¶Â¯¿ÇÁòÃºÓ­ÖýÕ³Ì½ÁÙ±¡Ñ®ÉÆ¸£×ÝÔñÀñÔ¸·ü²ÐÀ×ÑÓÑÌ¾ä´¿½¥¸ûÅÜÔóÂýÔÔÂ³³à·±¾³³±ºáµô×¶Ï£³Ø°Ü´¬¼ÙÁÁÎ½ÍÐ»ïÕÜ»³¸î°Ú¹±³Ê¾¢²ÆÒÇ³ÁÁ¶Âé×ï×æÏ¢³µ´©»õÏúÆëÊó³é»­ËÇÁú¿âÊØÖþ·¿¸èº®Ï²¸çÏ´Ê´·ÏÄÉ¸¹ºõÂ¼¾µ¸¾¶ñÖ¬×¯²ÁÏÕÔÞÖÓÒ¡µä±ú±çÖñ¹ÈÂôÂÒÐéÇÅ°Â²®¸Ï´¹Í¾¶î±ÚÍø½ØÒ°ÒÅ¾²Ä±Åª¹Ò¿ÎÕòÍýÊ¢ÄÍÔ®ÔúÂÇ¼ü¹é·ûÇì¾ÛÈÆÄ¦Ã¦ÎèÓöË÷¹Ë½ºÑòºþ¶¤ÈÊÒô¼£ËéÉìµÆ±Ü·ºÍö´ðÓÂÆµ»ÊÁø¹þ½Ò¸ÊÅµ¸ÅÏÜÅ¨µºÏ®Ë­ºéÐ»ÅÚ½½°ßÑ¶¶®Áéµ°±Õº¢ÊÍÈé¾ÞÍ½Ë½ÒøÒÁ¾°Ì¹ÀÛÔÈÃ¹¶ÅÀÖÀÕ¸ôÍä¼¨ÕÐÉÜºúºôÍ´·åÁã²ñ»ÉÎçÌø¾ÓÉÐ¶¡ÇØÉÔ×·ÁºÕÛºÄ¼îÊâ¸ÚÍÚÊÏÈÐ¾ç¶ÑºÕºÉÐØºâÇÚÄ¤ÆªµÇ×¤°¸¿¯Ñí»ºÍ¹ÒÛ¼ô´¨Ñ©Á´ÓæÀ²Á³»§Âåæß²ªÃËÂòÑî×Ú½¹ÈüÆìÂË¹èÌ¿¹É×øÕôÄý¾¹ÏÝÇ¹Àè¾ÈÃ°°µ¶´·¸Í²ÄúËÎ»¡±¬ÃýÍ¿Î¶½ò±ÛÕÏºÖÂ½°¡½¡×ð¶¹°ÎÄªµÖÉ£ÆÂ·ì¾¯ÌôÎÛ±ù¼í×ìÉ¶·¹ËÜ¼ÄÕÔº°µæµ¤¶É¶úÅÙ»¢±ÊÏ¡À¥ÀËÈø²èµÎÇ³ÓµÑ¨¸²Â×Äï¶Ö½þÐäÖé´ÆÂè×ÏÏ·Ëþ´¸ÕðËêÃ²½àÆÊÀÎ·æÒÉ°ÔÉÁÆÒÃÍËßË¢ºÝºöÔÖÄÖÇÇÌÆÂ©ÎÅÉòÈÛÂÈ»Ä¾¥ÄÐ·²ÇÀÏñ½¬ÅÔ²£ÒàÖÒ³ªÃÉÓè·×²¶ËøÓÈ³ËÎÚÖÇµ­ÔÊÅÑÐó·ýÃþÐâÉ¨±ÏÁ§±¦Ð¾Ò¯¼øÃØ¾»½¯¸Æ¼çÌÚ¿ÝÅ×¹ìÌÃ°è°ÖÑ­ÓÕ×£Àø¿Ï¾ÆÉþÇîÌÁÔïÅÝ´üÀÊÎ¹ÂÁÈíÇþ¿Å¹ßÃ³·à×ÛÇ½Ç÷±Ë½ìÄ«°­ÆôÄæÐ¶º½ÒÂËïÁäÁëÆ­ÐÝ½è', // ÖÐÎÄÑéÖ¤Âë×Ö·û´®
        'useImgBg' => false, // Ê¹ÓÃ±³¾°Í¼Æ¬
        'fontSize' => 25, // ÑéÖ¤Âë×ÖÌå´óÐ¡(px)
        'useCurve' => true, // ÊÇ·ñ»­»ìÏýÇúÏß
        'useNoise' => true, // ÊÇ·ñÌí¼ÓÔÓµã
        'imageH'   => 0, // ÑéÖ¤ÂëÍ¼Æ¬¸ß¶È
        'imageW'   => 0, // ÑéÖ¤ÂëÍ¼Æ¬¿í¶È
        'length'   => 5, // ÑéÖ¤ÂëÎ»Êý
        'fontttf'  => '', // ÑéÖ¤Âë×ÖÌå£¬²»ÉèÖÃËæ»ú»ñÈ¡
        'bg'       => array(243, 251, 254), // ±³¾°ÑÕÉ«
        'reset'    => true, // ÑéÖ¤³É¹¦ºóÊÇ·ñÖØÖÃ

        'SESSION_AUTO_START'     => true, // ÊÇ·ñ×Ô¶¯¿ªÆôSession
        'SESSION_OPTIONS'        => array(), // session ÅäÖÃÊý×é Ö§³Ötype name id path expire domain µÈ²ÎÊý
        'SESSION_TYPE'           => '', // session handlerÀàÐÍ Ä¬ÈÏÎÞÐèÉèÖÃ ³ý·ÇÀ©Õ¹ÁËsession handlerÇý¶¯
        'SESSION_PREFIX'         => '', // session Ç°×º
        // 'VAR_SESSION_ID'      =>  'session_id',     //sessionIDµÄÌá½»±äÁ¿
    );

    private $_image = null; // ÑéÖ¤ÂëÍ¼Æ¬ÊµÀý
    private $_color = null; // ÑéÖ¤Âë×ÖÌåÑÕÉ«
    private $_now_time = null;

    /**
     * ¼Ü¹¹·½·¨ ÉèÖÃ²ÎÊý
     * @access public
     * @param  array $config ÅäÖÃ²ÎÊý
     */
    public function __construct($config = array())
    {
        $this->_now_time = $_SERVER['REQUEST_TIME'];
        $this->config    = array_merge($this->config, $config);
    }

    /**
     * Ê¹ÓÃ $this->name »ñÈ¡ÅäÖÃ
     * @access public
     * @param  string $name ÅäÖÃÃû³Æ
     * @return multitype    ÅäÖÃÖµ
     */
    public function __get($name)
    {
        return $this->config[$name];
    }

    /**
     * ÉèÖÃÑéÖ¤ÂëÅäÖÃ
     * @access public
     * @param  string $name ÅäÖÃÃû³Æ
     * @param  string $value ÅäÖÃÖµ
     * @return void
     */
    public function __set($name, $value)
    {
        if (isset($this->config[$name])) {
            $this->config[$name] = $value;
        }
    }

    /**
     * ¼ì²éÅäÖÃ
     * @access public
     * @param  string $name ÅäÖÃÃû³Æ
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->config[$name]);
    }

    /**
     * ÑéÖ¤ÑéÖ¤ÂëÊÇ·ñÕýÈ·
     * @access public
     * @param string $code ÓÃ»§ÑéÖ¤Âë
     * @param string $id ÑéÖ¤Âë±êÊ¶
     * @return bool ÓÃ»§ÑéÖ¤ÂëÊÇ·ñÕýÈ·
     */
    public function check($code, $id = '')
    {
        $key = $this->authcode($this->seKey) . $id;
        // ÑéÖ¤Âë²»ÄÜÎª¿Õ
        $secode = $this->session($key);
        if (empty($code) || empty($secode)) {
            return false;
        }
        // session ¹ýÆÚ
        if ($this->_now_time - $secode['verify_time'] > $this->expire) {
            $this->session($key, null);
            return false;
        }

        if ($this->authcode(strtoupper($code)) == $secode['verify_code']) {
            $this->reset && $this->session($key, null);
            return true;
        }

        return false;
    }

    /**
     * Êä³öÑéÖ¤Âë²¢°ÑÑéÖ¤ÂëµÄÖµ±£´æµÄsessionÖÐ
     * ÑéÖ¤Âë±£´æµ½sessionµÄ¸ñÊ½Îª£º array('verify_code' => 'ÑéÖ¤ÂëÖµ', 'verify_time' => 'ÑéÖ¤Âë´´½¨Ê±¼ä');
     * @access public
     * @param string $id ÒªÉú³ÉÑéÖ¤ÂëµÄ±êÊ¶
     * @return void
     */
    public function entry($id = '')
    {
        // Í¼Æ¬¿í(px)
        $this->imageW || $this->imageW = $this->length * $this->fontSize * 1.5 + $this->length * $this->fontSize / 2;
        // Í¼Æ¬¸ß(px)
        $this->imageH || $this->imageH = $this->fontSize * 2.5;
        // ½¨Á¢Ò»·ù $this->imageW x $this->imageH µÄÍ¼Ïñ
        $this->_image = imagecreate($this->imageW, $this->imageH);
        // ÉèÖÃ±³¾°
        imagecolorallocate($this->_image, $this->bg[0], $this->bg[1], $this->bg[2]);

        // ÑéÖ¤Âë×ÖÌåËæ»úÑÕÉ«
        $this->_color = imagecolorallocate($this->_image, mt_rand(1, 150), mt_rand(1, 150), mt_rand(1, 150));
        // ÑéÖ¤ÂëÊ¹ÓÃËæ»ú×ÖÌå
        $ttfPath = dirname(__FILE__) . '/Verify/' . ($this->useZh ? 'zhttfs' : 'ttfs') . '/';

        if (empty($this->fontttf)) {
            $dir  = dir($ttfPath);
            $ttfs = array();
            while (false !== ($file = $dir->read())) {
                if ('.' != $file[0] && substr($file, -4) == '.ttf') {
                    $ttfs[] = $file;
                }
            }
            $dir->close();
            $this->fontttf = $ttfs[array_rand($ttfs)];
        }
        $this->fontttf = $ttfPath . $this->fontttf;

        if ($this->useImgBg) {
            $this->_background();
        }

        if ($this->useNoise) {
            // »æÔÓµã
            $this->_writeNoise();
        }
        if ($this->useCurve) {
            // »æ¸ÉÈÅÏß
            $this->_writeCurve();
        }

        // »æÑéÖ¤Âë
        $code   = array(); // ÑéÖ¤Âë
        $codeNX = 0; // ÑéÖ¤ÂëµÚN¸ö×Ö·ûµÄ×ó±ß¾à
        if ($this->useZh) {
            // ÖÐÎÄÑéÖ¤Âë
            for ($i = 0; $i < $this->length; $i++) {
                $code[$i] = iconv_substr($this->zhSet, floor(mt_rand(0, mb_strlen($this->zhSet, 'utf-8') - 1)), 1, 'utf-8');
                imagettftext($this->_image, $this->fontSize, mt_rand(-40, 40), $this->fontSize * ($i + 1) * 1.5, $this->fontSize + mt_rand(10, 20), $this->_color, $this->fontttf, $code[$i]);
            }
        } else {
            for ($i = 0; $i < $this->length; $i++) {
                $code[$i] = $this->codeSet[mt_rand(0, strlen($this->codeSet) - 1)];
                $codeNX += mt_rand($this->fontSize * 1.2, $this->fontSize * 1.6);
                imagettftext($this->_image, $this->fontSize, mt_rand(-40, 40), $codeNX, $this->fontSize * 1.6, $this->_color, $this->fontttf, $code[$i]);
            }
        }

        // ±£´æÑéÖ¤Âë
        $key                   = $this->authcode($this->seKey);
        $code                  = $this->authcode(strtoupper(implode('', $code)));
        $secode                = array();
        $secode['verify_code'] = $code; // °ÑÐ£ÑéÂë±£´æµ½session
        $secode['verify_time'] = $this->_now_time; // ÑéÖ¤Âë´´½¨Ê±¼ä

        $this->session($key . $id, $secode);

        header('Cache-Control: private, max-age=0, no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);
        header('Pragma: no-cache');
        header("content-type: image/png");

        // Êä³öÍ¼Ïñ
        imagepng($this->_image);
        imagedestroy($this->_image);
    }

    /**
     * »­Ò»ÌõÓÉÁ½ÌõÁ¬ÔÚÒ»Æð¹¹³ÉµÄËæ»úÕýÏÒº¯ÊýÇúÏß×÷¸ÉÈÅÏß(Äã¿ÉÒÔ¸Ä³É¸üË§µÄÇúÏßº¯Êý)
     *
     *      ¸ßÖÐµÄÊýÑ§¹«Ê½Õ¦¶¼ÍüÁËÄù£¬Ð´³öÀ´
     *        ÕýÏÒÐÍº¯Êý½âÎöÊ½£ºy=Asin(¦Øx+¦Õ)+b
     *      ¸÷³£ÊýÖµ¶Ôº¯ÊýÍ¼ÏñµÄÓ°Ïì£º
     *        A£º¾ö¶¨·åÖµ£¨¼´×ÝÏòÀ­ÉìÑ¹ËõµÄ±¶Êý£©
     *        b£º±íÊ¾²¨ÐÎÔÚYÖáµÄÎ»ÖÃ¹ØÏµ»ò×ÝÏòÒÆ¶¯¾àÀë£¨ÉÏ¼ÓÏÂ¼õ£©
     *        ¦Õ£º¾ö¶¨²¨ÐÎÓëXÖáÎ»ÖÃ¹ØÏµ»òºáÏòÒÆ¶¯¾àÀë£¨×ó¼ÓÓÒ¼õ£©
     *        ¦Ø£º¾ö¶¨ÖÜÆÚ£¨×îÐ¡ÕýÖÜÆÚT=2¦Ð/¨O¦Ø¨O£©
     *
     */
    private function _writeCurve()
    {
        $px = $py = 0;

        // ÇúÏßÇ°²¿·Ö
        $A = mt_rand(1, $this->imageH / 2); // Õñ·ù
        $b = mt_rand(-$this->imageH / 4, $this->imageH / 4); // YÖá·½ÏòÆ«ÒÆÁ¿
        $f = mt_rand(-$this->imageH / 4, $this->imageH / 4); // XÖá·½ÏòÆ«ÒÆÁ¿
        $T = mt_rand($this->imageH, $this->imageW * 2); // ÖÜÆÚ
        $w = (2 * M_PI) / $T;

        $px1 = 0; // ÇúÏßºá×ø±êÆðÊ¼Î»ÖÃ
        $px2 = mt_rand($this->imageW / 2, $this->imageW * 0.8); // ÇúÏßºá×ø±ê½áÊøÎ»ÖÃ

        for ($px = $px1; $px <= $px2; $px = $px + 1) {
            if (0 != $w) {
                $py = $A * sin($w * $px + $f) + $b + $this->imageH / 2; // y = Asin(¦Øx+¦Õ) + b
                $i  = (int) ($this->fontSize / 5);
                while ($i > 0) {
                    imagesetpixel($this->_image, $px + $i, $py + $i, $this->_color); // ÕâÀï(while)Ñ­»·»­ÏñËØµã±ÈimagettftextºÍimagestringÓÃ×ÖÌå´óÐ¡Ò»´Î»­³ö£¨²»ÓÃÕâwhileÑ­»·£©ÐÔÄÜÒªºÃºÜ¶à
                    $i--;
                }
            }
        }

        // ÇúÏßºó²¿·Ö
        $A   = mt_rand(1, $this->imageH / 2); // Õñ·ù
        $f   = mt_rand(-$this->imageH / 4, $this->imageH / 4); // XÖá·½ÏòÆ«ÒÆÁ¿
        $T   = mt_rand($this->imageH, $this->imageW * 2); // ÖÜÆÚ
        $w   = (2 * M_PI) / $T;
        $b   = $py - $A * sin($w * $px + $f) - $this->imageH / 2;
        $px1 = $px2;
        $px2 = $this->imageW;

        for ($px = $px1; $px <= $px2; $px = $px + 1) {
            if (0 != $w) {
                $py = $A * sin($w * $px + $f) + $b + $this->imageH / 2; // y = Asin(¦Øx+¦Õ) + b
                $i  = (int) ($this->fontSize / 5);
                while ($i > 0) {
                    imagesetpixel($this->_image, $px + $i, $py + $i, $this->_color);
                    $i--;
                }
            }
        }
    }

    /**
     * »­ÔÓµã
     * ÍùÍ¼Æ¬ÉÏÐ´²»Í¬ÑÕÉ«µÄ×ÖÄ¸»òÊý×Ö
     */
    private function _writeNoise()
    {
        $codeSet = '2345678abcdefhijkmnpqrstuvwxyz';
        for ($i = 0; $i < 10; $i++) {
            //ÔÓµãÑÕÉ«
            $noiseColor = imagecolorallocate($this->_image, mt_rand(150, 225), mt_rand(150, 225), mt_rand(150, 225));
            for ($j = 0; $j < 5; $j++) {
                // »æÔÓµã
                imagestring($this->_image, 5, mt_rand(-10, $this->imageW), mt_rand(-10, $this->imageH), $codeSet[mt_rand(0, 29)], $noiseColor);
            }
        }
    }

    /**
     * »æÖÆ±³¾°Í¼Æ¬
     * ×¢£ºÈç¹ûÑéÖ¤ÂëÊä³öÍ¼Æ¬±È½Ï´ó£¬½«Õ¼ÓÃ±È½Ï¶àµÄÏµÍ³×ÊÔ´
     */
    private function _background()
    {
        $path = dirname(__FILE__) . '/Verify/bgs/';
        $dir  = dir($path);

        $bgs = array();
        while (false !== ($file = $dir->read())) {
            if ('.' != $file[0] && substr($file, -4) == '.jpg') {
                $bgs[] = $path . $file;
            }
        }
        $dir->close();

        $gb = $bgs[array_rand($bgs)];

        list($width, $height) = @getimagesize($gb);
        // Resample
        $bgImage = @imagecreatefromjpeg($gb);
        @imagecopyresampled($this->_image, $bgImage, 0, 0, 0, 0, $this->imageW, $this->imageH, $width, $height);
        @imagedestroy($bgImage);
    }

    /* ¼ÓÃÜÑéÖ¤Âë */
    private function authcode($str)
    {
        $key = substr(md5($this->seKey), 5, 8);
        $str = substr(md5($str), 8, 10);
        return md5($key . $str);
    }


    /**
     * session¹ÜÀíº¯Êý
     * @param string|array $name sessionÃû³Æ Èç¹ûÎªÊý×éÔò±íÊ¾½øÐÐsessionÉèÖÃ
     * @param mixed $value sessionÖµ
     * @return mixed
     */
    public function session($name = '', $value = '')
    {
        // Æô¶¯session
        if ($this->config['SESSION_AUTO_START']) {
            session_start();
        }

        $prefix = $this->config['SESSION_PREFIX'];
        if (is_array($name)) {
            // session³õÊ¼»¯ ÔÚsession_start Ö®Ç°µ÷ÓÃ
            if (isset($name['prefix'])) {
                $this->config['SESSION_PREFIX'] = $name['prefix'];
            }

            if ($this->config['VAR_SESSION_ID'] && isset( $_REQUEST[$this->config['VAR_SESSION_ID']])) {  
                session_id($_REQUEST[$this->config['VAR_SESSION_ID']]);
            } elseif (isset($name['id'])) {
                session_id($name['id']);
            }
            if ('common' == APP_MODE) {
                // ÆäËüÄ£Ê½¿ÉÄÜ²»Ö§³Ö
                ini_set('session.auto_start', 0);
            }
            if (isset($name['name'])) {
                session_name($name['name']);
            }

            if (isset($name['path'])) {
                session_save_path($name['path']);
            }

            if (isset($name['domain'])) {
                ini_set('session.cookie_domain', $name['domain']);
            }

            if (isset($name['expire'])) {
                ini_set('session.gc_maxlifetime', $name['expire']);
                ini_set('session.cookie_lifetime', $name['expire']);
            }
            if (isset($name['use_trans_sid'])) {
                ini_set('session.use_trans_sid', $name['use_trans_sid'] ? 1 : 0);
            }

            if (isset($name['use_cookies'])) {
                ini_set('session.use_cookies', $name['use_cookies'] ? 1 : 0);
            }

            if (isset($name['cache_limiter'])) {
                session_cache_limiter($name['cache_limiter']);
            }

            if (isset($name['cache_expire'])) {
                session_cache_expire($name['cache_expire']);
            }

            if (isset($name['type'])) {
                $this->config['SESSION_TYPE'] = $name['type'];
            }

            if ($this->config['SESSION_TYPE']) {
                // ¶ÁÈ¡sessionÇý¶¯
                $type   = $this->config['SESSION_TYPE'];
                $class  = strpos($type, '\\') ? $type : 'Think\\Session\\Driver\\' . ucwords(strtolower($type));
                $hander = new $class();
                session_set_save_handler(
                    array(&$hander, "open"),
                    array(&$hander, "close"),
                    array(&$hander, "read"),
                    array(&$hander, "write"),
                    array(&$hander, "destroy"),
                    array(&$hander, "gc"));
            }
            // Æô¶¯session
            if ($this->config['SESSION_AUTO_START']) {
                session_start();
            }

        } elseif ('' === $value) {
            if ('' === $name) {
                // »ñÈ¡È«²¿µÄsession
                return $prefix ? $_SESSION[$prefix] : $_SESSION;
            } elseif (0 === strpos($name, '[')) {
                // session ²Ù×÷
                if ('[pause]' == $name) {
                    // ÔÝÍ£session
                    session_write_close();
                } elseif ('[start]' == $name) {
                    // Æô¶¯session
                    session_start();
                } elseif ('[destroy]' == $name) {
                    // Ïú»Ùsession
                    $_SESSION = array();
                    session_unset();
                    session_destroy();
                } elseif ('[regenerate]' == $name) {
                    // ÖØÐÂÉú³Éid
                    session_regenerate_id();
                }
            } elseif (0 === strpos($name, '?')) {
                // ¼ì²ésession
                $name = substr($name, 1);
                if (strpos($name, '.')) {
                    // Ö§³ÖÊý×é
                    list($name1, $name2) = explode('.', $name);
                    return $prefix ? isset($_SESSION[$prefix][$name1][$name2]) : isset($_SESSION[$name1][$name2]);
                } else {
                    return $prefix ? isset($_SESSION[$prefix][$name]) : isset($_SESSION[$name]);
                }
            } elseif (is_null($name)) {
                // Çå¿Õsession
                if ($prefix) {
                    unset($_SESSION[$prefix]);
                } else {
                    $_SESSION = array();
                }
            } elseif ($prefix) {
                // »ñÈ¡session
                if (strpos($name, '.')) {
                    list($name1, $name2) = explode('.', $name);
                    return isset($_SESSION[$prefix][$name1][$name2]) ? $_SESSION[$prefix][$name1][$name2] : null;
                } else {
                    return isset($_SESSION[$prefix][$name]) ? $_SESSION[$prefix][$name] : null;
                }
            } else {
                if (strpos($name, '.')) {
                    list($name1, $name2) = explode('.', $name);
                    return isset($_SESSION[$name1][$name2]) ? $_SESSION[$name1][$name2] : null;
                } else {
                    return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
                }
            }
        } elseif (is_null($value)) {
            // É¾³ýsession
            if (strpos($name, '.')) {
                list($name1, $name2) = explode('.', $name);
                if ($prefix) {
                    unset($_SESSION[$prefix][$name1][$name2]);
                } else {
                    unset($_SESSION[$name1][$name2]);
                }
            } else {
                if ($prefix) {
                    unset($_SESSION[$prefix][$name]);
                } else {
                    unset($_SESSION[$name]);
                }
            }
        } else {
            // ÉèÖÃsession
            if (strpos($name, '.')) {
                list($name1, $name2) = explode('.', $name);
                if ($prefix) {
                    $_SESSION[$prefix][$name1][$name2] = $value;
                } else {
                    $_SESSION[$name1][$name2] = $value;
                }
            } else {
                if ($prefix) {
                    $_SESSION[$prefix][$name] = $value;
                } else {
                    $_SESSION[$name] = $value;
                }
            }
        }
        return null;
    }

}
