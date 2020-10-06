<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_43303171fe39020ccfcc5d932e2a86ec67138745877216d70aefba851140c513 extends Twig_SupTwg_Template
{
    public function __construct(Twig_SupTwg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ggFigureWidth' => array($this, 'block_ggFigureWidth'),
            'ggMosaicHiddenItem' => array($this, 'block_ggMosaicHiddenItem'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'a_attributes_class_set' => array($this, 'block_a_attributes_class_set'),
            'a_attributes_href' => array($this, 'block_a_attributes_href'),
            'sggPopupLinkForDetailsButton' => array($this, 'block_sggPopupLinkForDetailsButton'),
            'figure_before' => array($this, 'block_figure_before'),
            'galleryTypeBlock' => array($this, 'block_galleryTypeBlock'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'previewImageUrlVar' => array($this, 'block_previewImageUrlVar'),
            'imageAttributesStyleSize' => array($this, 'block_imageAttributesStyleSize'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_class' => array($this, 'block_figcaption_class'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'ggImageCaptionEntry' => array($this, 'block_ggImageCaptionEntry'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figcaption_after_set_exif' => array($this, 'block_figcaption_after_set_exif'),
            'figure_after' => array($this, 'block_figure_after'),
            'oneGalleryImage' => array($this, 'block_oneGalleryImage'),
            'mosaicLastImageNumberWrapper' => array($this, 'block_mosaicLastImageNumberWrapper'),
            'mosaicFigcaptionWrapper' => array($this, 'block_mosaicFigcaptionWrapper'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";";
        }
        // line 5
        echo "\tborder-radius:";
        echo Twig_SupTwg_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";";
        // line 6
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1")) {
            // line 7
            echo "\t\tbox-shadow:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px";
            echo " ";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px";
            echo " ";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px";
            echo " ";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";";
        }
        // line 8
        echo ";";
        // line 10
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 11
            $context["newImageDistance"] = ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()) / 2);
            // line 12
            echo "\t\tmargin:";
            echo Twig_SupTwg_escape_filter($this->env, ((array_key_exists("newImageDistance", $context)) ? (_Twig_SupTwg_default_filter(($context["newImageDistance"] ?? null), 0)) : (0)), "html", null, true);
            echo "px;";
        } else {
            // line 14
            echo "\t\tmargin:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), "html", null, true);
            echo "px;";
        }
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 19
            echo "\t\theight:";
            echo Twig_SupTwg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";";
        }
        // line 21
        $this->displayBlock('ggFigureWidth', $context, $blocks);
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 30
        ob_start();
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array())))) {
            // line 32
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            // line 34
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 38
        if ((array_key_exists("mosaicParams", $context) && ($this->getAttribute(($context["mosaicParams"] ?? null), "photoCountLeft", array()) > 0))) {
            // line 39
            $context["is_ext_link"] = false;
        } else {
            // line 41
            $context["is_ext_link"] = ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())));
        }
        // line 44
        ob_start();
        // line 45
        if ((((($context["is_ext_link"] ?? null) == false) && ( !$this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) || Twig_SupTwg_test_empty(Twig_SupTwg_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0"))) {
            // line 46
            echo "\t\tgg-colorbox";
        }
        // line 49
        if ((($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !Twig_SupTwg_test_empty(Twig_SupTwg_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0"))) {
            // line 50
            echo "\t\tgg-video";
        }
        // line 53
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && ((($context["is_ext_link"] ?? null) == false) || ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !Twig_SupTwg_test_empty(Twig_SupTwg_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))))))) {
            // line 54
            echo "\t\tpbox";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 58
        ob_start();
        // line 59
        if ((($context["is_ext_link"] ?? null) == true)) {
            // line 60
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()))), "html", null, true);
            // line 61
            $context["link"] = true;
        } else {
            // line 63
            echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute(($context["gallery"] ?? null), "id", array())), "html", null, true);
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 67
        ob_start();
        // line 68
        if ((($context["link"] ?? null) && $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 69
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "rel", array()), "html", null, true);
        }
        // line 71
        if (((($context["link"] ?? null) == false) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "enabled", array()) == "false"))) {
            // line 72
            echo "\t\tnofollow";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 76
        ob_start();
        // line 78
        ob_start();
        // line 79
        $this->displayBlock('ggMosaicHiddenItem', $context, $blocks);
        $context["ggMosaicHiddenItemVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 84
        ob_start();
        // line 85
        $this->displayBlock('a_attributes', $context, $blocks);
        $context["var_a_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 124
        ob_start();
        // line 125
        $this->displayBlock('figure_before', $context, $blocks);
        $context["var_figure_before"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 132
        ob_start();
        // line 133
        $this->displayBlock('galleryTypeBlock', $context, $blocks);
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 158
        ob_start();
        // line 159
        $this->displayBlock('figure_attributes', $context, $blocks);
        $context["var_figure_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 184
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 186
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
            // line 187
            $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
        } else {
            // line 190
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()) == 0)) {
                // line 191
                $context["width"] = round((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())));
            } else {
                // line 193
                $context["width"] = null;
            }
        }
        // line 197
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
            // line 198
            $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
        } else {
            // line 201
            $context["height"] = null;
        }
        // line 209
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 3))) {
            // line 210
            $context["crop"] = 1;
        }
        // line 213
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 1)) {
            // line 214
            $context["height"] = null;
        }
        // line 217
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 2)) {
            // line 218
            $context["width"] = null;
        }
        // line 221
        ob_start();
        // line 222
        $this->displayBlock('previewImageUrlVar', $context, $blocks);
        $context["previewImgUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 231
        ob_start();
        // line 232
        $this->displayBlock('imageAttributesStyleSize', $context, $blocks);
        $context["imageAttributesStyleSizeVar"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 245
        ob_start();
        // line 246
        $this->displayBlock('image_attributes', $context, $blocks);
        $context["var_image_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 276
        ob_start();
        // line 277
        $this->displayBlock('figcaption_style', $context, $blocks);
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 302
        ob_start();
        // line 303
        echo "\t\tclass=\"";
        $this->displayBlock('figcaption_class', $context, $blocks);
        echo "\"";
        // line 304
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        $context["var_figcaption_attributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 314
        $context["prepareImgUrl"] = (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        // line 316
        ob_start();
        // line 317
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        $context["var_figcaption_wrap"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 447
        ob_start();
        // line 448
        $this->displayBlock('figcaption_after', $context, $blocks);
        $context["var_figcaption_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 490
        ob_start();
        // line 491
        $this->displayBlock('figure_after', $context, $blocks);
        $context["var_figure_after"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        // line 499
        $this->displayBlock('oneGalleryImage', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_ggFigureWidth($context, array $blocks = array())
    {
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 23
            echo "\t\t\twidth:auto;";
        } else {
            // line 25
            echo "\t\t\twidth:";
            echo Twig_SupTwg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";";
        }
    }

    // line 79
    public function block_ggMosaicHiddenItem($context, array $blocks = array())
    {
    }

    // line 85
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 86
        echo "
\t\t\tid=\"gg-";
        // line 87
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "-";
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
        echo "\"";
        // line 89
        $this->displayBlock('a_attributes_class_set', $context, $blocks);
        // line 92
        echo "
         data-attachment-id=\"";
        // line 93
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "id", array()), "html", null, true);
        echo "\"";
        // line 95
        echo Twig_SupTwg_escape_filter($this->env, ($context["ggMosaicHiddenItemVar"] ?? null), "html", null, true);
        // line 96
        $this->displayBlock('a_attributes_href', $context, $blocks);
        // line 101
        if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
            // line 102
            echo "\t\t\t\ttitle=\"";
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
            echo "\"";
        }
        // line 105
        $this->displayBlock('sggPopupLinkForDetailsButton', $context, $blocks);
        // line 118
        echo "\t\t\tstyle=\"border-radius:";
        echo Twig_SupTwg_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"";
    }

    // line 89
    public function block_a_attributes_class_set($context, array $blocks = array())
    {
        // line 90
        echo "\t\t\t\tclass=\"gg-link";
        echo " ";
        echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["aClass"] ?? null)), "html", null, true);
        if ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on") && (($context["index"] ?? null) > 0))) {
            echo " hidden-item";
        }
        echo "\"";
    }

    // line 96
    public function block_a_attributes_href($context, array $blocks = array())
    {
        // line 97
        echo "\t\t\t\thref=\"";
        echo Twig_SupTwg_escape_filter($this->env, htmlspecialchars_decode(Twig_SupTwg_trim_filter(($context["aHref"] ?? null))), "html", null, true);
        echo "\"
\t\t\t\ttarget=\"";
        // line 98
        echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"";
    }

    // line 105
    public function block_sggPopupLinkForDetailsButton($context, array $blocks = array())
    {
        // line 107
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1") && (($context["link"] ?? null) == false))) {
            // line 108
            echo "\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"";
        } elseif (($this->getAttribute($this->getAttribute(        // line 109
($context["photo"] ?? null), "attachment", array()), "video", array()) == null)) {
            // line 110
            echo "\t\t\t\t\trel=\"";
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["aRel"] ?? null)), "html", null, true);
            echo "\"";
        }
        // line 114
        if ((($context["link"] ?? null) == true)) {
            // line 115
            echo "\t\t\t\t\tdata-type=\"link\"";
        }
    }

    // line 125
    public function block_figure_before($context, array $blocks = array())
    {
        // line 126
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 127
            echo "\t\t\t\t<a";
            echo Twig_SupTwg_escape_filter($this->env, ($context["var_a_attributes"] ?? null), "html", null, true);
            echo " >";
        }
    }

    // line 133
    public function block_galleryTypeBlock($context, array $blocks = array())
    {
        // line 134
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 135
            if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
                // line 136
                echo "\t\t\t\t\ticons";
            } else {
                // line 138
                echo "\t\t\t\t\tnone";
            }
        } else {
            // line 141
            if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
                // line 142
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && Twig_SupTwg_in_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 143
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "captionEffect", array()), "html", null, true);
                } else {
                    // line 145
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                }
            } else {
                // line 148
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 149
                    echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                } else {
                    // line 151
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                }
            }
        }
    }

    // line 159
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 160
        echo "\t\t\tclass=\"grid-gallery-caption";
        // line 161
        if ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on") && (($context["index"] ?? null) > 0))) {
            echo " hidden-item";
        }
        // line 162
        echo Twig_SupTwg_escape_filter($this->env, ($context["ggMosaicHiddenItemVar"] ?? null), "html", null, true);
        // line 163
        if ((($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 164
            echo "\t\t\t\tshadow-show";
        }
        // line 166
        if ((($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 167
            echo "\t\t\t\tshadow-hide";
        }
        // line 168
        echo "\"
\t\t\tdata-grid-gallery-type=\"";
        // line 169
        echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["galleryType"] ?? null)), "html", null, true);
        echo "\"
\t\t\tdata-index=\"";
        // line 170
        echo Twig_SupTwg_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\"
\t\t\tstyle=\"display:none;";
        // line 171
        echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["figureStyle"] ?? null)), "html", null, true);
        echo "\"";
        // line 172
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true")) {
            // line 173
            ob_start();
            // line 174
            if (Twig_SupTwg_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 175
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
            } else {
                // line 177
                echo "\t\t\t\t\t\t\ticons";
            }
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
        }
    }

    // line 222
    public function block_previewImageUrlVar($context, array $blocks = array())
    {
        // line 223
        if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "isNotRealAttachment", array()) == 1)) {
            // line 224
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()), "html", null, true);
        } else {
            // line 226
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
        }
    }

    // line 232
    public function block_imageAttributesStyleSize($context, array $blocks = array())
    {
        // line 233
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 234
            echo "\t\t\t\twidth:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;";
        }
        // line 236
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 237
            echo "\t\t\t\theight:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;";
            // line 238
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) != 0) || Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
                // line 239
                echo "\t\t\t\t\twidth:auto;";
            }
        }
    }

    // line 246
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 247
        $context["imgSrcStr"] = htmlspecialchars_decode(Twig_SupTwg_replace_filter(Twig_SupTwg_trim_filter(($context["previewImgUrl"] ?? null)), "/%20\$/", ""));
        // line 248
        $context["imgClassStr"] = "ggImg";
        // line 249
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "enabled", array()) == "1")) {
            // line 250
            echo "\t\t\t\tdata-gg-real-image-href=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["imgSrcStr"] ?? null), "html", null, true);
            echo "\"";
            // line 252
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "hideLoader", array()) != "true") && Twig_SupTwg_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "defaultImgUrl", array())))) {
                // line 253
                $context["imgSrcStr"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "defaultImgUrl", array());
            } else {
                // line 255
                $context["imgSrcStr"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "lazyload", array()), "leerImgUrl", array());
            }
            // line 257
            $context["imgClassStr"] = (($context["imgClassStr"] ?? null) . " ggLazyImg");
        }
        // line 260
        if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 2) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 3)) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 4))) {
            // line 261
            $context["imgClassStr"] = (($context["imgClassStr"] ?? null) . " ggNotInitImg");
        }
        // line 263
        echo "\t\t\tsrc=\"";
        echo Twig_SupTwg_escape_filter($this->env, ($context["imgSrcStr"] ?? null), "html", null, true);
        echo "\"
\t\t\tclass=\"";
        // line 264
        echo Twig_SupTwg_escape_filter($this->env, ($context["imgClassStr"] ?? null), "html", null, true);
        echo "\"
\t\t\talt=\"";
        // line 265
        if ((Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array()) == " "))) {
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        } else {
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"";
        // line 266
        if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
            // line 267
            echo "\t\t\t\ttitle=\"";
            if ( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()))) {
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
            } else {
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            }
            echo "\"";
        }
        // line 269
        echo "\t\t\tdata-description=\"";
        if ( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()))) {
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\tdata-caption=\"";
        // line 270
        if ( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()));
        } else {
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\tdata-title=\"";
        // line 271
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\tstyle=\"";
        // line 272
        echo Twig_SupTwg_escape_filter($this->env, ($context["imageAttributesStyleSizeVar"] ?? null), "html", null, true);
        echo "\"";
    }

    // line 277
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 278
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 279
            echo "\t\t\t\tfont-family:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";";
            // line 280
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 281
                echo "\t\t\t\t\tbackground-color:";
                echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\theight : 100%;";
            } else {
                // line 285
                echo "\t\t\t\t\theight : 100%;
\t\t\t\t\tbackground-color: transparent;";
            }
        } else {
            // line 289
            echo "\t\t\t\tcolor:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\tbackground-color:";
            // line 290
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\tfont-size:";
            // line 291
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\ttext-align:";
            // line 292
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\tfont-family:";
            // line 293
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";";
            // line 294
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 295
                echo "\t\t\t\t\topacity:1;
\t\t\t\t\tbottom:0;";
            }
        }
    }

    // line 303
    public function block_figcaption_class($context, array $blocks = array())
    {
    }

    // line 304
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 305
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 306
            echo "\t\t\t\tdata-alpha=\"";
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"";
        } else {
            // line 308
            echo "\t\t\t\tdata-alpha=\"";
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
            echo "\"";
        }
        // line 310
        echo "\t\t\tstyle=\"";
        echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["figcaptionStyle"] ?? null)), "html", null, true);
        echo "\"";
    }

    // line 317
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 319
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 320
            echo "\t\t\t\t<div
\t\t\t\t\t\tclass=\"hi-icon-wrap";
            // line 321
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_slice($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\tdata-margin=\"";
            // line 322
            echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t>";
            // line 325
            $context["showFewIconsVar"] = (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "showFewIcons", array()), "default")) : ("default"));
            // line 326
            $context["isShowVideoIcon"] = 0;
            // line 327
            if (( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())) && ((            // line 329
($context["showFewIconsVar"] ?? null) == "default") || ((            // line 331
($context["showFewIconsVar"] ?? null) == "params") && ($this->getAttribute($this->getAttribute(            // line 332
($context["settings"] ?? null), "icons", array()), "isVideoIcon", array()) == "1"))))) {
                // line 336
                $context["isShowVideoIcon"] = 1;
            }
            // line 339
            $context["isShowLinkIcon"] = 0;
            // line 340
            if (( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())) && ((            // line 342
($context["showFewIconsVar"] ?? null) == "default") || ((            // line 344
($context["showFewIconsVar"] ?? null) == "params") && ($this->getAttribute($this->getAttribute(            // line 345
($context["settings"] ?? null), "icons", array()), "isLinkIcon", array()) == "1"))))) {
                // line 349
                $context["isShowLinkIcon"] = 1;
            }
            // line 352
            if ((($context["isShowVideoIcon"] ?? null) == 1)) {
                // line 353
                ob_start();
                // line 354
                if (Twig_SupTwg_in_filter("youtu", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) {
                    // line 355
                    echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()), ($context["youtube"] ?? null)), "html", null, true);
                    // line 356
                    $context["videoSource"] = "youtube";
                } elseif (Twig_SupTwg_in_filter("vimeo.com", $this->getAttribute($this->getAttribute(                // line 357
($context["photo"] ?? null), "attachment", array()), "video", array()))) {
                    // line 358
                    echo Twig_SupTwg_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()), ($context["vimeoPattern"] ?? null), ($context["vimeoReplace"] ?? null))) . "?api=1"), "html", null, true);
                    // line 359
                    $context["videoSource"] = "vimeo";
                } else {
                    // line 361
                    echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())), "html", null, true);
                }
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
                // line 365
                $context["videoIcon"] = ((Twig_SupTwg_in_filter("youtu", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 367
                ob_start();
                // line 368
                echo "\t\t\t\t\t\t\tmargin-left:";
                echo Twig_SupTwg_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)) . "px"), "html", null, true);
                echo ";
\t\t\t\t\t\t\tmargin-right:";
                // line 369
                echo Twig_SupTwg_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)) . "px"), "html", null, true);
                echo ";";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
                // line 371
                echo "
\t\t\t\t\t\t<a href=\"";
                // line 372
                echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["videoUrl"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-id=\"gg-";
                // line 373
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\"";
                // line 374
                if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
                    // line 375
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
                    echo "\"";
                }
                // line 377
                echo "
\t\t\t\t\t\t\tclass=\"hi-icon gg-video";
                // line 378
                echo Twig_SupTwg_escape_filter($this->env, ($context["videoIcon"] ?? null), "html", null, true);
                // line 379
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 380
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\tstyle=\"";
                // line 381
                echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-video-source=\"";
                // line 382
                echo Twig_SupTwg_escape_filter($this->env, ($context["videoSource"] ?? null), "html", null, true);
                echo "\"";
                // line 384
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1")) {
                    // line 385
                    echo "\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"";
                } else {
                    // line 388
                    echo "\t\t\t\t\t\t\t\t\trel=\"video\"";
                }
                // line 391
                echo "\t\t\t\t\t\t>";
                // line 393
                echo "\t\t\t\t\t\t</a>";
            }
            // line 396
            if ((($context["isShowLinkIcon"] ?? null) == 1)) {
                // line 397
                echo "\t\t\t\t\t\t<a";
                // line 398
                if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
                    // line 399
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
                    echo "\"";
                }
                // line 401
                echo "\t\t\t\t\t\t\tdata-id=\"gg-";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\" href=\"";
                if (($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on")) {
                    echo Twig_SupTwg_escape_filter($this->env, ($context["prepareImgUrl"] ?? null), "html", null, true);
                } else {
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()), "html", null, true);
                }
                echo " \" target=\"";
                echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link";
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && ($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"></a>";
            }
            // line 404
            $context["isShowPopupIcon"] = 0;
            // line 405
            if (((((            // line 406
($context["showFewIconsVar"] ?? null) == "default") && Twig_SupTwg_test_empty(            // line 407
($context["videoUrl"] ?? null))) && Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(            // line 408
($context["photo"] ?? null), "attachment", array()), "external_link", array()))) || ((            // line 411
($context["showFewIconsVar"] ?? null) == "params") && ($this->getAttribute($this->getAttribute(            // line 412
($context["settings"] ?? null), "icons", array()), "isPopupIcon", array()) == "1")))) {
                // line 415
                $context["isShowPopupIcon"] = 1;
            }
            // line 418
            if ((($context["isShowPopupIcon"] ?? null) == 1)) {
                // line 419
                echo "\t\t\t\t\t\t<a";
                // line 420
                if (($this->getAttribute(($context["settings"] ?? null), "disableImageTitle", array()) != 1)) {
                    // line 421
                    echo "\t\t\t\t\t\t\t\ttitle=\"";
                    echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["aTitle"] ?? null)), "html", null, true);
                    echo "\"";
                }
                // line 423
                echo "\t\t\t\t\t\t\tdata-id=\"gg-";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["prepareImgUrl"] ?? null), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"";
                // line 424
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1")) {
                    // line 425
                    echo "\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"";
                }
                // line 426
                echo ">Open in pop-up window</a>";
            }
            // line 428
            echo "\t\t\t\t</div>";
        }
        // line 431
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 432
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 433
                $this->displayBlock('ggImageCaptionEntry', $context, $blocks);
            }
        }
    }

    public function block_ggImageCaptionEntry($context, array $blocks = array())
    {
        // line 434
        if ( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
            // line 435
            echo "\t\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore";
            if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                echo "ggRtlClass";
            }
            echo "\"";
            if (($this->getAttribute(($context["settings"] ?? null), "rtl", array()) == true)) {
                echo "dir=\"rtl\"";
            }
            echo " style=\"font-size:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";\">
\t\t\t\t\t\t\t\t<object type=\"none/none\">";
            // line 437
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t\t</div>";
        }
    }

    // line 448
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 449
        if ((($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 451
            ob_start();
            // line 452
            echo "\t\t\t\t\tcolor:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\tbackground-color:";
            // line 453
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\tfont-size:";
            // line 454
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\tfont-family:";
            // line 455
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";";
            // line 456
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 457
                echo "\t\t\t\t\t\ttext-align:";
                echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";";
            }
            // line 459
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 460
                echo "\t\t\t\t\t\topacity:1;
\t\t\t\t\t\tbottom:0;";
            }
            // line 463
            echo "\t\t\t\t\tvertical-align:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
            // line 466
            if (( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 467
                echo "\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"caption-with-";
                // line 468
                if (Twig_SupTwg_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\t\tstyle=\"";
                // line 469
                echo Twig_SupTwg_escape_filter($this->env, ($context["captionStyle"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\tdata-alpha=\"";
                // line 470
                echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_trim_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">";
                // line 472
                $context["ggCaptionText"] = $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array());
                // line 473
                $context["ggCaptionTextStyle"] = ((((("padding: 10px;display:table-cell;font-size:" . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 474
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array())) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em"))) . ";vertical-align:") . $this->getAttribute($this->getAttribute($this->getAttribute(                // line 475
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array())) . ";");
                // line 476
                if ( !Twig_SupTwg_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
                    // line 477
                    $context["ggCaptionText"] = $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array());
                    // line 478
                    $context["ggCaptionTextStyle"] = (($context["ggCaptionTextStyle"] ?? null) . "font-weight: 800;");
                }
                // line 480
                $this->displayBlock('figcaption_after_set_exif', $context, $blocks);
                // line 483
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>";
            }
        }
    }

    // line 480
    public function block_figcaption_after_set_exif($context, array $blocks = array())
    {
        // line 481
        echo "\t\t\t\t\t\t\t\t<span style=\"";
        echo Twig_SupTwg_escape_filter($this->env, ($context["ggCaptionTextStyle"] ?? null), "html", null, true);
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, ($context["ggCaptionText"] ?? null), "html", null, true);
        echo "</span>";
    }

    // line 491
    public function block_figure_after($context, array $blocks = array())
    {
        // line 492
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 493
            echo "\t\t\t\t</a>";
        }
    }

    // line 499
    public function block_oneGalleryImage($context, array $blocks = array())
    {
        // line 500
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_figure_before"] ?? null), "html", null, true);
        echo "
\t\t<FIGURE";
        // line 501
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_figure_attributes"] ?? null), "html", null, true);
        echo " >
\t\t\t<div class=\"crop";
        // line 503
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 504
            echo "\t\t\t\t\timage-overlay";
        }
        // line 505
        echo "\"
\t\t\t\t style=\"";
        // line 507
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
            // line 508
            echo "\t\t\t\t\t\t width:";
            echo Twig_SupTwg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t height:";
            // line 509
            echo Twig_SupTwg_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()) . Twig_SupTwg_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\t\t overflow:hidden;";
        }
        // line 511
        echo "\">

\t\t\t\t<img";
        // line 513
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_image_attributes"] ?? null), "html", null, true);
        echo " />
\t\t\t</div>";
        // line 515
        $this->displayBlock('mosaicLastImageNumberWrapper', $context, $blocks);
        // line 517
        $this->displayBlock('mosaicFigcaptionWrapper', $context, $blocks);
        // line 530
        echo "\t\t</FIGURE>";
        // line 531
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_figure_after"] ?? null), "html", null, true);
    }

    // line 515
    public function block_mosaicLastImageNumberWrapper($context, array $blocks = array())
    {
    }

    // line 517
    public function block_mosaicFigcaptionWrapper($context, array $blocks = array())
    {
        // line 518
        echo "\t\t\t\t<FIGCAPTION";
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_figcaption_attributes"] ?? null), "html", null, true);
        echo "\t>
\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\t\t\tstyle=\"";
        // line 522
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 523
            echo "\t\t\t\t\t\t\t\t\tvertical-align:";
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";";
        }
        // line 524
        echo "\">";
        // line 525
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_figcaption_wrap"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</FIGCAPTION>";
        // line 528
        echo Twig_SupTwg_escape_filter($this->env, ($context["var_figcaption_after"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1106 => 528,  1101 => 525,  1099 => 524,  1094 => 523,  1092 => 522,  1085 => 518,  1082 => 517,  1077 => 515,  1073 => 531,  1071 => 530,  1069 => 517,  1067 => 515,  1063 => 513,  1059 => 511,  1054 => 509,  1049 => 508,  1047 => 507,  1044 => 505,  1041 => 504,  1039 => 503,  1035 => 501,  1031 => 500,  1028 => 499,  1023 => 493,  1021 => 492,  1018 => 491,  1010 => 481,  1007 => 480,  1000 => 483,  998 => 480,  995 => 478,  993 => 477,  991 => 476,  989 => 475,  988 => 474,  987 => 473,  985 => 472,  981 => 470,  977 => 469,  969 => 468,  966 => 467,  964 => 466,  959 => 463,  955 => 460,  953 => 459,  948 => 457,  946 => 456,  943 => 455,  938 => 454,  934 => 453,  929 => 452,  927 => 451,  925 => 449,  922 => 448,  914 => 437,  900 => 435,  898 => 434,  890 => 433,  888 => 432,  886 => 431,  883 => 428,  880 => 426,  877 => 425,  875 => 424,  861 => 423,  856 => 421,  854 => 420,  852 => 419,  850 => 418,  847 => 415,  845 => 412,  844 => 411,  843 => 408,  842 => 407,  841 => 406,  840 => 405,  838 => 404,  817 => 401,  812 => 399,  810 => 398,  808 => 397,  806 => 396,  803 => 393,  801 => 391,  798 => 388,  795 => 385,  793 => 384,  790 => 382,  786 => 381,  783 => 380,  779 => 379,  777 => 378,  774 => 377,  769 => 375,  767 => 374,  762 => 373,  758 => 372,  755 => 371,  751 => 369,  746 => 368,  744 => 367,  742 => 365,  738 => 361,  735 => 359,  733 => 358,  731 => 357,  729 => 356,  727 => 355,  725 => 354,  723 => 353,  721 => 352,  718 => 349,  716 => 345,  715 => 344,  714 => 342,  713 => 340,  711 => 339,  708 => 336,  706 => 332,  705 => 331,  704 => 329,  703 => 327,  701 => 326,  699 => 325,  695 => 322,  690 => 321,  687 => 320,  685 => 319,  682 => 317,  676 => 310,  671 => 308,  666 => 306,  664 => 305,  661 => 304,  656 => 303,  649 => 295,  647 => 294,  644 => 293,  640 => 292,  635 => 291,  631 => 290,  626 => 289,  621 => 285,  615 => 281,  613 => 280,  609 => 279,  607 => 278,  604 => 277,  599 => 272,  595 => 271,  587 => 270,  578 => 269,  569 => 267,  567 => 266,  560 => 265,  556 => 264,  551 => 263,  548 => 261,  546 => 260,  543 => 257,  540 => 255,  537 => 253,  535 => 252,  531 => 250,  529 => 249,  527 => 248,  525 => 247,  522 => 246,  516 => 239,  514 => 238,  510 => 237,  508 => 236,  503 => 234,  501 => 233,  498 => 232,  493 => 226,  490 => 224,  488 => 223,  485 => 222,  478 => 177,  475 => 175,  473 => 174,  471 => 173,  469 => 172,  466 => 171,  462 => 170,  458 => 169,  455 => 168,  452 => 167,  450 => 166,  447 => 164,  445 => 163,  443 => 162,  439 => 161,  437 => 160,  434 => 159,  427 => 151,  424 => 149,  422 => 148,  418 => 145,  415 => 143,  413 => 142,  411 => 141,  407 => 138,  404 => 136,  402 => 135,  400 => 134,  397 => 133,  390 => 127,  388 => 126,  385 => 125,  380 => 115,  378 => 114,  373 => 110,  371 => 109,  369 => 108,  367 => 107,  364 => 105,  359 => 98,  354 => 97,  351 => 96,  341 => 90,  338 => 89,  332 => 118,  330 => 105,  325 => 102,  323 => 101,  321 => 96,  319 => 95,  316 => 93,  313 => 92,  311 => 89,  306 => 87,  303 => 86,  300 => 85,  295 => 79,  288 => 25,  285 => 23,  283 => 22,  280 => 21,  275 => 499,  272 => 491,  270 => 490,  267 => 448,  265 => 447,  262 => 317,  260 => 316,  258 => 314,  255 => 304,  251 => 303,  249 => 302,  246 => 277,  244 => 276,  241 => 246,  239 => 245,  236 => 232,  234 => 231,  231 => 222,  229 => 221,  226 => 218,  224 => 217,  221 => 214,  219 => 213,  216 => 210,  214 => 209,  211 => 201,  208 => 198,  206 => 197,  202 => 193,  199 => 191,  197 => 190,  194 => 187,  192 => 186,  190 => 184,  187 => 159,  185 => 158,  182 => 133,  180 => 132,  177 => 125,  175 => 124,  172 => 85,  170 => 84,  167 => 79,  165 => 78,  163 => 76,  159 => 72,  157 => 71,  154 => 69,  152 => 68,  150 => 67,  146 => 63,  143 => 61,  141 => 60,  139 => 59,  137 => 58,  133 => 54,  131 => 53,  128 => 50,  126 => 49,  123 => 46,  121 => 45,  119 => 44,  116 => 41,  113 => 39,  111 => 38,  107 => 34,  104 => 32,  102 => 31,  100 => 30,  97 => 21,  92 => 19,  90 => 18,  85 => 14,  80 => 12,  78 => 11,  76 => 10,  74 => 8,  60 => 7,  58 => 6,  54 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwg_Source("", "@galleries/shortcode/helpers.twig", "C:\\xampp\\htdocs\\websites\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\helpers.twig");
    }
}
