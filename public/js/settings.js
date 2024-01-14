pimcore.registerNS("cleanup.settings");

cleanup.settings = Class.create({
  initialize: function () {
    this.openfiles = {};

    this.panel = new Ext.Panel({
        id: "cleanup_settings",
        title: t("cleanup_settings_bundle_title"),
        iconCls: "icon_cleanup_settings",
        border: false,
        layout: "fit",
        closable: true,
        items: [this.getSettingsPanel()]
    });

    var tabPanel = Ext.getCmp("pimcore_panel_tabs");
    tabPanel.add(this.panel);
    tabPanel.setActiveItem("cleanup_settings");

    this.panel.on("destroy", function () {
        pimcore.globalmanager.remove("cleanup_settings");
    }.bind(this));
  },

  getSettingsPanel: function () {
    if (!this.layout) {
      this.layout = Ext.create('Ext.form.Panel', {
        bodyStyle: 'padding:20px 5px 20px 5px;',
        border: false,
        autoScroll: true,
        forceLayout: true,
        defaults: {
            forceLayout: true
        },
        fieldDefaults: {
            labelWidth: 250
        },
        buttons: [
            {
                text: t("save"),
                // handler: this.save.bind(this),
                iconCls: "pimcore_icon_apply",
                // disabled: !this.getValue("writeable")
            }
        ],
        items: [
          {
            xtype: 'fieldset',
            title: t('cleanup_settings_title'),
            collapsible: true,
            collapsed: false,
            autoHeight: true,
            labelWidth: 250,
            defaultType: 'textfield',
            items: [
                {
                    boxLabel: t("cleanup_settings_remove_directly"),
                    xtype: "checkbox",
                    name: "cleanup.remove_directly",
                    // checked: this.getValue("cleanup.remove_directly")
                },
                {
                    boxLabel: t("cleanup_settings_mark unused_assets"),
                    xtype: "checkbox",
                    name: "cleanup.mark unused_assets",
                    // checked: this.getValue("cleanup.mark unused_assets")
                }
            ]
          }
        ]
      });
    }
    return this.layout;
    
  }
});
