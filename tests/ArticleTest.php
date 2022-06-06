<?php
	
use PHPUnit\Framework\TestCase; 

class ArticleTest extends \PHPUnit\Framework\TestCase {

	protected $article;

	public function testTitleIsEmptyByDefault() {
    }

    public function testSlugIsEmtpyWithNoTile() {
    }

    public function provider() {
    	return array(
    		"testSlugHasSpacesReplacedByUnderscores" => array("An example article", "An_example_article"),
    		"testSlugHasWhitespaceReplaceBySingleUnderscore" => array("An     example  \n   article", "An_example_article"),
    		"testSlugdoesNotStartOrEndWithAnUnderscore" => array(" An example article ", "An_example_article"),
    		"testSlugDoesNotHaveAnyNonWordCharacters" => array("Read! This! Now!", "Read_This_Now"),
    	);
    }

    /**
     * @dataProvider provider
     */
    public function testSlug($title, $slug) {

    }
}
	
?>