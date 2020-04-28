<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2019 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Configurator\RendererGenerators;

use s9e\TextFormatter\Configurator\RendererGenerator;
use s9e\TextFormatter\Configurator\Rendering;
use s9e\TextFormatter\Renderers\Unformatted as UnformattedRenderer;

class Unformatted implements RendererGenerator
{
	/**
	* {@inheritdoc}
	*/
	public function getRenderer(Rendering $rendering)
	{
		return new UnformattedRenderer;
	}
}