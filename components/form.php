<?php

class Form
{
    public static function ForStates($action, $method, $dropdownMarkup)
    {
        return <<<HTML
<div class="container padding-50">
    <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="card card-outline-info">
                <div class="card-header">
                    <div id="id_searchfilter" >
                        <div class="card-block">
                            <form action="{$action}" class="form-horizontal" method="{$method}">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <p class="control-label col-md-12 text-center">Select Your State:</p>
                                                <br>
                                                <br>
                                                <div class="col-md-12">
                                                    {$dropdownMarkup}
                                                    <input type="submit" value="Search" class="btn btn-success btn-block" style="margin-top: 5px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
HTML;

    }
}