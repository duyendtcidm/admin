<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <div class="navbar">
        <div class="navbar__logo">
            <div class="navbar__logo--image"></div>
            <div class="navbar__logo--brand">Kwarovski</div>
        </div>
        <div class="navbar__menu">
            <div class="navbar__menu--item">
                <div class="navbar__menu--item-icon navbar__menu--item-icon-1"></div>
                <div class="navbar__menu--item-text-1">Overview</div>
            </div>
            <div class="navbar__menu--item">
                <div class="navbar__menu--item-icon navbar__menu--item-icon-2"></div>
                <div class="navbar__menu--item-text">Report</div>
            </div>
            <div class="navbar__menu--item">
                <div class="navbar__menu--item-icon navbar__menu--item-icon-3"></div>
                <div class="navbar__menu--item-text">User list</div>
            </div>
            <div class="navbar__menu--item">
                <div class="navbar__menu--item-icon navbar__menu--item-icon-4"></div>
                <div class="navbar__menu--item-text">Image list</div>
            </div>
            <div class="navbar__menu--item">
                <div class="navbar__menu--item-icon navbar__menu--item-icon-5"></div>
                <div class="navbar__menu--item-text">System</div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header__work">
        </div>
        <div class="header__user">
            <div class="header__user--avatar"></div>
            <div class="header__user--name">Đinh Thị Duyên</div>
            <div class="header__user--moreinfor"></div>
        </div>
    </div>
    <div class="content">
        <div class="content__title">
            <div class="content__title--name">User List</div>
            <div id="addEmployee" class="content__title--button">
                <div class="content__title--button-icon"></div>
                <div class="content__title--button-text">Add user</div>
            </div>
        </div>
        <div class="content__choice">
            <div class="content__choice--standard">
                <input style="width: 300px;" type="text" class="d__input-label d__input--icon" placeholder="Find by name">

            </div>
            <div class="content__choice-button">
                <button id="btnDelete" class="content__choice--button content__choice--button-delete"></button>
                <button id="btnRefresh" onclick="loadData()" class="content__choice--button content__choice--button-refresh"></button>
            </div>
        </div>
        <div class="content__table">
            <div class="content__table--tbl">
                <table id="employeesTable" class="d-table">
                    <thead>
                        <tr>
                            <th class="text-align-left" style="width: 80px;">User name</th>
                            <th class="text-align-left" style="width: 80px;">Password</th>
                            <th class="text-align-left">Full name</th>
                            <th class="text-align-left" style="width: 50px;">Gender</th>
                            <th class="text-align-center" style="width: 80px;">Date of birth</th>
                            <th class="text-align-left" style="width: 150px;">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="dialog">

        </div>
    </div>
    <div class="d--popup-modal" id="dlgPopup">
        <div class="d-popup d-popup-auto-width">
            <div class="d-popup--title">
                <div class="d-popup--title-1">User information</div>
                <div id="" class="d-popup--title-close d-popup--close"></div>
            </div>
            <div class="d-popup--content">
                <div class="d-inform-text">
                    <div class="d-inform-text--type">Account
                        <br>
                        <div class="d-inform-text--type-under">
                            <br>
                        </div>
                    </div>
                    <div class="d-inform-text--row">
                        <div>
                            <div class="d-col">
                                <div class="d-label--input">
                                    <div class="d-label--input-text">User name (
                                        <font style="color: red;">*</font> )
                                        <br>
                                    </div>
                                    <input class="d__input-label d__input-label-w100" type="text" id="txtEmplyeeCode" fieldName="EmployeeCode">
                                </div>
                                <div class="d-label--input">Password (
                                    <font style="color: red;">*</font> ) <br>
                                    <input class="d__input-label d__input-label-w100" type="text" id="txtFullName" fieldName="FullName">
                                </div>
                            </div>
                            <div class="d-col">
                                <div class="d-label--input">Full name (
                                    <font style="color: red;">*</font> ) <br>
                                    <input class="d__input-label d__input-label-w100" type="text" id="txtIdentifyCard" fieldName="IdentifyCard">
                                </div>
                            </div>
                            <div class="d-col">
                                <div class="d-label--input">Email (
                                    <font style="color: red;">*</font> ) <br>
                                    <input class="d__input-label d__input-label-w100" type="text" id="txtEmail" fieldName="Email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="d-inform-text--type">B. Private:<br>
                        <div class="d-inform-text--type-under">
                            <br>
                        </div>
                    </div> -->
                    <!-- <div class="d-inform-text--row">
                        <div>
                            <div class="d-col">
                                <div class="d-label--input">Full name (
                                    <font style="color: red;">*</font> ) <br>
                                    <input class="d__input-label" type="text" id="txtIdentifyCard" fieldName="IdentifyCard">
                                </div>
                                <div style="margin-left: 10px;" class="d-label--input">Gender <br>
                                    <select class="d-combobox" name="" id="dtGender">
                                    </select>
                                </div>
                            </div>
                            <div class="d-col">
                                <div class="d-label--input">Date of birth <br>
                                    <input class="d__input-label" style="width: 100% !important;" type="date" id="dtDateOfBirth" fieldName="DateOfBirth">
                                </div>
                                <div style="margin-left: 10px;" class="d-label--input"> <br>
                                    <!-- <select class="d-combobox" name="" id="dtGender">
                                    </select> -->
                </div>
            </div>
        </div>
    </div> -->
    </div>
    </div>
    <div class="d-popup--button">
        <button class="d-btn d-btn-default d-popup--close">Hủy</button>
        <div class="d-popup--save d-btn--icon" id="btnSave">
            <div class="d-btn--icon-i d-btn--icon-save"></div>
            <div class="d-btn--text">Lưu</div>
        </div>

    </div>
    </div>
    </div>

    <div class="d-toast-box">
        <div class="d-toast-item d-toast-msg-delete">
            <div class=" d-toast-msg">
                <div class="d-toast-msg--icon"></div>
                <div class="d-toast-msg--text">Delete successfully!</div>
                <div class="d-toast-msg--close"></div>
            </div>
        </div>
        <div class="d-toast-item d-toast-msg-add">
            <div class=" d-toast-msg">
                <div class="d-toast-msg--icon"></div>
                <div class="d-toast-msg--text">Add successfully!</div>
                <div class="d-toast-msg--close"></div>
            </div>
        </div>
    </div>

    <script src="../lib/jquery-3.6.0.min.js"></script>
    <!-- <script src="../js/page/admin.js"></script> -->
    <script src="../js/base/common.js"></script>
    <script src="../js/base/Enum.js"></script>
    <script src="../js/page/admin.php"></script>

    <!-- phpfile -->
    <?php include '../js/page/adminHandle.php'; ?>

</body>

</html>