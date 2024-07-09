<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
<div>

</div>
<div class="container pt-8 form-control">
    <div class="d-flex flex-row pt-3 col-2">
        <span>Option de notifications</span>
    </div>
    <div class="d-flex flex-row">
        <div class="d-flex flex-row pt-3 col-6">
            <div class="col-12 d-flex flex-row ">
                <div class="col-2 d-flex">
                    <span>OK</span>
                </div>
                <div class="container col-12">
                    <div class="selector">
                        <div class="selector-item">
                            <input type="radio" id="yes_ok" name="selector_ok" class="selector-item_radio_yes" checked>
                            <label for="yes_ok" class="selector-item_label">
                                activé <img class="logo" src="icons\state_up_32x32.png" alt="OK"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="none_ok" name="selector_ok" class="selector-item_radio_none">
                            <label for="none_ok" class="selector-item_label">
                                désactivé <img class="logo" src="icons\state_up_32x32.png" alt="OK"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="default_ok" name="selector_ok" class="selector-item_radio_default">
                            <label for="default_ok" class="selector-item_label">
                                default <img class="logo" src="icons\state_up_32x32.png" alt="OK"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-row">
        <div class="d-flex flex-row pt-3 col-6">
            <div class="col-12 d-flex flex-row ">
                <div class="col-2 d-flex">
                    <span>Inconnu</span>
                </div>
                <div class="container col-12">
                    <div class="selector">
                        <div class="selector-item">
                            <input type="radio" id="yes_unreachable" name="selector_unreachable" class="selector-item_radio_yes" checked>
                            <label for="yes_unreachable" class="selector-item_label">
                                activé <img class="logo" src="icons\state_unreachable_32x32.png" alt="critical"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="none_unreachable" name="selector_unreachable" class="selector-item_radio_none">
                            <label for="none_unreachable" class="selector-item_label">
                                désactivé <img class="logo" src="icons\state_unreachable_32x32.png" alt="critical"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="default_unreachable" name="selector_unreachable" class="selector-item_radio_default">
                            <label for="default_unreachable" class="selector-item_label">
                                default <img class="logo" src="icons\state_unreachable_32x32.png" alt="critical"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-row">
        <div class="d-flex flex-row pt-3 col-6">
            <div class="col-12 d-flex flex-row ">
                <div class="col-2 d-flex">
                    <span>Attention</span>
                </div>
                <div class="container col-12">
                    <div class="selector">
                        <div class="selector-item">
                            <input type="radio" id="yes_warning" name="selector_warning" class="selector-item_radio_yes" checked>
                            <label for="yes_warning" class="selector-item_label">
                                activé <img class="logo" src="icons\state_warning_32x32.png" alt="critical"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="none_warning" name="selector_warning" class="selector-item_radio_none">
                            <label for="none_warning" class="selector-item_label">
                                désactivé <img class="logo" src="icons\state_warning_32x32.png" alt="critical"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="default_warning" name="selector_warning" class="selector-item_radio_default">
                            <label for="default_warning" class="selector-item_label">
                                default <img class="logo" src="icons\state_warning_32x32.png" alt="critical"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-row">
        <div class="d-flex flex-row pt-3 col-6">
            <div class="col-12 d-flex flex-row ">
                <div class="col-2 d-flex">
                    <span>Critique</span>
                </div>
                <div class="container col-12">
                    <div class="selector">
                        <div class="selector-item">
                            <input type="radio" id="yes_critical" name="selector_critical" class="selector-item_radio_yes" checked>
                            <label for="yes_critical" class="selector-item_label">
                                activé <img class="logo" src="icons\state_critical_32x32.png" alt="critical"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="none_critical" name="selector_critical" class="selector-item_radio_none">
                            <label for="none_critical" class="selector-item_label">
                                désactivé <img class="logo" src="icons\state_critical_32x32.png" alt="critical"/>
                            </label>
                        </div>
                        <div class="selector-item">
                            <input type="radio" id="default_critical" name="selector_critical" class="selector-item_radio_default">
                            <label for="default_critical" class="selector-item_label">
                                default <img class="logo" src="icons\state_critical_32x32.png" alt="critical"/>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</body>
</html>
<style>

.body {
}
    .selector {
        position        : relative;
        height          : 32px;
        display         : flex;
        justify-content : space-around;
        align-items     : CENTER;
    }
    .selector-item {
        position        : relative;
        flex-basis      : calc(70% / 3);
        height          : 100%;
        display         : flex;
        justify-content : center;
        align-items     : center;
        flex-direction  : row;
    }
    .selector-item_radio_yes {
        appearance : none;
        display    : none;
    }
    .selector-item_radio_none {
        appearance : none;
        display    : none;
    }
    .selector-item_radio_default {
        appearance : none;
        display    : none;
    }
    .selector-item_label {
        position      : relative;

        text-align    : center;
        align-items   : center;
        border-radius : 9999px;
        line-height   : normal;
        font-family   : 'Poppins', sans-serif;
        font-weight   : 700;
        display       : flex;
    }
    .selector .logo {
        display : none;
    }
    .selector .selector-item:has(:checked) .logo {
        display      : block;
        padding-left : 10px;
    }
    .selector-item_radio_yes:checked + .selector-item_label {
        background-color : darkseagreen;
        width            : 140px;
        display          : flex;
        justify-content  : center;
    }
    .selector-item_radio_none:checked + .selector-item_label {
        background-color : darkgrey;
        width            : 140px;
        display          : flex;
        justify-content  : center;
    }
    .selector-item_radio_default:checked + .selector-item_label {
        background-color : #9F4EA0;
        color            : whitesmoke;
        width            : 140px;
        display          : flex;
        justify-content  : center;
    }

</style>
