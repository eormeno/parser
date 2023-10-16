<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/JSONLexer.php';
require_once __DIR__ . '/JSONParser.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;


final class TreeShapeListener implements ParseTreeListener {
    public function visitTerminal(TerminalNode $node) : void {
        // echo $node->getSymbol()->getType() . " -> " . $node->getText() . "\n";
    }
    public function visitErrorNode(ErrorNode $node) : void {
        // display in console which token is not recognized
        echo "Error: " . $node->getSymbol()->getType() . " -> " . $node->getText() . "\n";

    }
    public function exitEveryRule(ParserRuleContext $ctx) : void {
    }

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        // echo $ctx->getRuleIndex() . " -> " . $ctx->getText() . "\n";
    }
}

$input = InputStream::fromPath($argv[1]);
$lexer = new JSONLexer($input);
$tokens = new CommonTokenStream($lexer);
$parser = new JSONParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$tree = $parser->json();

ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);