<?php
	
use PHPUnit\Framework\TestCase;
use App\Article;
use Hamcrest\Core\HasToString;

class ArticleTest extends TestCase {

	protected $article;

	public function testTitleIsEmptyByDefault() {
      $titleEmpty = new Article;
      $result = $titleEmpty->title;
      $this->assertEmpty($result);
    }

    public function testSlugIsEmtpyWithNoTile() {
        $slugEmpty = new Article;
        $result = $slugEmpty->getSlug();
        $this->assertEmpty($result);
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
       $article = new Article;
       $article->title = $title;
       $article->getSlug();
       $this->assertEquals($article->getSlug(), $slug);
    }
}
	
?>