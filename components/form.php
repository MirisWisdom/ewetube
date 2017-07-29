<?php

class Form
{
    public static function ForStates($action, $method, $dropdownMarkup, $dropdownMarkup2, $dropdownMarkup3, $dropdownMarkup4)
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

                                                <div class="col-md-12">
                                                    <p class="control-label col-md-12 text-center">Select Your State:</p>
                                                    <br>
                                                    {$dropdownMarkup}
                                                    <br>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="control-label col-md-12 text-center">Select Your Industry:</p>
                                                    <br>
                                                    {$dropdownMarkup2}
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="control-label col-md-12 text-center">Start Year:</p>
                                                    <br>
                                                    {$dropdownMarkup3}
                                                    <br>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="control-label col-md-12 text-center">End Year:</p>
                                                    <br>
                                                    {$dropdownMarkup4}
                                                    <br>
                                                </div>
                                                <div class="col-md-12">
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