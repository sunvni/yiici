<?php

class SiteControllerTestCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('site/dashboard');
    }

    // tests
    public function canSeeDashboard(FunctionalTester $I)
    {
        $I->canSee('Dashboard');
    }
}
