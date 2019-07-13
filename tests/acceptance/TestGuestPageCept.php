<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join and home/login pages');

$I->amOnPage('/');
$I->see('Welcome to the Paradise!');

$I->seeLink('Join', 'site/join');
$I->seeLink('Login', 'site/login');

$I->amOnPage('site/join');
$I->see('Join us', 'h1');

$I->amOnPage('site/login');
$I->see('Log in', 'h1');