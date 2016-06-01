<md-toolbar class="md-menu-toolbar sticky md-whiteframe-1dp">
    <div layout="row">
        <md-toolbar-filler layout layout-align="center center" flex="10" hide-sm hide-xs>
            <md-icon class="zmdi zmdi-storage zmdi-hc-2x"></md-icon>
        </md-toolbar-filler>
        <div flex="90">
            <h2 class="md-toolbar-tools" hide-sm hide-xs>Global Archive</h2>
            <md-divider></md-divider>
            <md-menu-bar>
                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        Artefacts
                    </button>
                    <md-menu-content>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('share', $event)">
                                Share...
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-menu>
                                <md-button ng-click="$mdOpenMenu()">New</md-button>
                                <md-menu-content>
                                    <md-menu-item>
                                        <md-button ng-click="ctrl.sampleAction('New Document', $event)">Document
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button ng-click="ctrl.sampleAction('New Spreadsheet', $event)">
                                            Spreadsheet
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button ng-click="ctrl.sampleAction('New Presentation', $event)">
                                            Presentation
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button ng-click="ctrl.sampleAction('New Form', $event)">Form</md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button ng-click="ctrl.sampleAction('New Drawing', $event)">Drawing
                                        </md-button>
                                    </md-menu-item>
                                </md-menu-content>
                            </md-menu>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('Open', $event)">
                                Open...
                                <span class="md-alt-text"> [[ 'M-O' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button disabled="disabled" ng-click="ctrl.sampleAction('Rename', $event)">
                                Rename
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('Print', $event)">
                                Print
                                <span class="md-alt-text">[[ 'M-P' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>
                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        Schedule
                    </button>
                    <md-menu-content>
                        <md-menu-item class="md-indent">
                            <md-icon md-svg-icon="undo"></md-icon>
                            <md-button ng-click="ctrl.sampleAction('undo', $event)">
                                Undo
                                <span class="md-alt-text">[[ 'M-Z' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item class="md-indent">
                            <md-icon md-svg-icon="redo"></md-icon>
                            <md-button ng-click="ctrl.sampleAction('redo', $event)">
                                Redo
                                <span class="md-alt-text">[[ 'M-Y' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item class="md-indent">
                            <md-icon md-svg-icon="content-cut"></md-icon>
                            <md-button ng-click="ctrl.sampleAction('cut', $event)">
                                Cut
                                <span class="md-alt-text">[[ 'M-X' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item class="md-indent">
                            <md-icon md-svg-icon="content-copy"></md-icon>
                            <md-button ng-click="ctrl.sampleAction('copy', $event)">
                                Copy
                                <span class="md-alt-text">[[ 'M-C' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item class="md-indent">
                            <md-icon md-svg-icon="content-paste"></md-icon>
                            <md-button ng-click="ctrl.sampleAction('paste', $event)">
                                Paste
                                <span class="md-alt-text">[[ 'M-P' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item class="md-indent">
                            <md-button ng-click="ctrl.sampleAction('Find and replace', $event)">
                                Find and replace...
                                <span class="md-alt-text">[[ 'M-S-H' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>
                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        Reports
                    </button>
                    <md-menu-content>
                        <md-menu-item type="checkbox" ng-model="ctrl.settings.printLayout">Print layout
                        </md-menu-item>
                        <md-menu-item class="md-indent">
                            <md-menu>
                                <md-button ng-click="$mdOpenMenu()">Mode</md-button>
                                <md-menu-content width="3">
                                    <md-menu-item type="radio" ng-model="ctrl.settings.presentationMode"
                                                  value="'presentation'">Presentation
                                    </md-menu-item>
                                    <md-menu-item type="radio" ng-model="ctrl.settings.presentationMode"
                                                  value="'edit'">Edit
                                    </md-menu-item>
                                    <md-menu-item type="radio" ng-model="ctrl.settings.presentationMode"
                                                  value="'modifiable'">Modifiable
                                    </md-menu-item>
                                </md-menu-content>
                            </md-menu>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item type="checkbox" ng-model="ctrl.settings.showRuler">Show ruler</md-menu-item>
                        <md-menu-item type="checkbox" ng-model="ctrl.settings.showEquationToolbar">Show equation
                            toolbar
                        </md-menu-item>
                        <md-menu-item type="checkbox" ng-model="ctrl.settings.showSpellingSuggestions">Show spelling
                            suggestions
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item type="checkbox" ng-model="ctrl.settings.compactControls">Compact controls
                        </md-menu-item>
                        <md-menu-item type="checkbox" ng-model="ctrl.settings.fullScreen">Full screen</md-menu-item>
                    </md-menu-content>
                </md-menu>
                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        Maintenance
                    </button>
                    <md-menu-content>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('bold', $event)">
                                Bold
                                <span class="md-alt-text"> [[ 'M-B' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('italic', $event)">
                                Italic
                                <span class="md-alt-text">[[ 'M-I' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('underline', $event)">
                                Underline
                                <span class="md-alt-text">[[ 'M-U' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('strikethrough', $event)">
                                Strikethrough
                                <span class="md-alt-text">[[ 'A-S-5' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('superscript', $event)">
                                Superscript
                                <span class="md-alt-text">[[ 'M-.' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('subscript', $event)">
                                Subscript
                                <span class="md-alt-text">[[ 'M-,' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button ng-click="ctrl.toggleSetting('clearFormatting')">Clear Formatting</md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>
                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        CheckIn /checkOut
                    </button>
                    <md-menu-content>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('bold', $event)">
                                Bold
                                <span class="md-alt-text"> [[ 'M-B' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('italic', $event)">
                                Italic
                                <span class="md-alt-text">[[ 'M-I' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('underline', $event)">
                                Underline
                                <span class="md-alt-text">[[ 'M-U' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('strikethrough', $event)">
                                Strikethrough
                                <span class="md-alt-text">[[ 'A-S-5' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('superscript', $event)">
                                Superscript
                                <span class="md-alt-text">[[ 'M-.' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('subscript', $event)">
                                Subscript
                                <span class="md-alt-text">[[ 'M-,' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button ng-click="ctrl.toggleSetting('clearFormatting')">Clear Formatting</md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>

                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        User Management
                    </button>
                    <md-menu-content>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('bold', $event)">
                                Bold
                                <span class="md-alt-text"> [[ 'M-B' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('italic', $event)">
                                Italic
                                <span class="md-alt-text">[[ 'M-I' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('underline', $event)">
                                Underline
                                <span class="md-alt-text">[[ 'M-U' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('strikethrough', $event)">
                                Strikethrough
                                <span class="md-alt-text">[[ 'A-S-5' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('superscript', $event)">
                                Superscript
                                <span class="md-alt-text">[[ 'M-.' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('subscript', $event)">
                                Subscript
                                <span class="md-alt-text">[[ 'M-,' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button ng-click="ctrl.toggleSetting('clearFormatting')">Clear Formatting</md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>

                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        Roles and Permission
                    </button>
                    <md-menu-content>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('bold', $event)">
                                Bold
                                <span class="md-alt-text"> [[ 'M-B' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('italic', $event)">
                                Italic
                                <span class="md-alt-text">[[ 'M-I' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('underline', $event)">
                                Underline
                                <span class="md-alt-text">[[ 'M-U' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('strikethrough', $event)">
                                Strikethrough
                                <span class="md-alt-text">[[ 'A-S-5' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('superscript', $event)">
                                Superscript
                                <span class="md-alt-text">[[ 'M-.' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('subscript', $event)">
                                Subscript
                                <span class="md-alt-text">[[ 'M-,' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button ng-click="ctrl.toggleSetting('clearFormatting')">Clear Formatting</md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>

                <md-menu>
                    <button ng-click="$mdOpenMenu()">
                        Developer Tools
                    </button>
                    <md-menu-content>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('bold', $event)">
                                Bold
                                <span class="md-alt-text"> [[ 'M-B' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('italic', $event)">
                                Italic
                                <span class="md-alt-text">[[ 'M-I' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('underline', $event)">
                                Underline
                                <span class="md-alt-text">[[ 'M-U' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('strikethrough', $event)">
                                Strikethrough
                                <span class="md-alt-text">[[ 'A-S-5' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('superscript', $event)">
                                Superscript
                                <span class="md-alt-text">[[ 'M-.' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-item>
                            <md-button ng-click="ctrl.sampleAction('subscript', $event)">
                                Subscript
                                <span class="md-alt-text">[[ 'M-,' | keyboardShortcut ]]</span>
                            </md-button>
                        </md-menu-item>
                        <md-menu-divider></md-menu-divider>
                        <md-menu-item>
                            <md-button ng-click="ctrl.toggleSetting('clearFormatting')">Clear Formatting</md-button>
                        </md-menu-item>
                    </md-menu-content>
                </md-menu>
            </md-menu-bar>
        </div>


        <md-toolbar-filler layout layout-align="end center" class="pull-right">
            <md-menu md-position-mode="target-right target">
                <md-button aria-label="Open demo menu" class="md-icon-button" ng-click="$mdOpenMenu($event)">
                    <md-icon md-menu-origin class="zmdi zmdi-settings zmdi-hc-2x"></md-icon>
                </md-button>
                <md-menu-content width="4">
                    <md-menu-item ng-repeat="item in [1, 2, 3]">
                        <md-button ng-click="ctrl.announceClick($index)">
                            <div layout="row" flex>
                                <p flex>Option [[item]]</p>
                                <md-icon md-menu-align-target class="zmdi zmdi-account"
                                         style="margin: auto 3px auto 0;"></md-icon>
                            </div>
                        </md-button>
                    </md-menu-item>
                </md-menu-content>
            </md-menu>
        </md-toolbar-filler>
    </div>
</md-toolbar>
