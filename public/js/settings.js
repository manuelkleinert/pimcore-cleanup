pimcore.registerNS("cleanup.settings");

cleanup.settings = Class.create({
  initialize: function () {
    this.openfiles = {};

    this.panel = new Ext.Panel({
        id: "cleanup_settings",
        title: t("cleanup_settings_bundle_title"),
        iconCls: "icon_cleanup_settings",
        border: false,
        layout: "border",
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
    if (!this.settingsPanel) {
      this.settingsPanel = new Ext.TabPanel({
          title: t("cleanup_settings_title"),
          region: "center",
          enableTabScroll: true,
          items: []
      });

      this.settingsPanel.add({
          xtype: "checkbox",
          boxLabel: t("enable_text_selection"),
          name: "enableTextSelection",
          value: 0
      });

      this.settingsPanel.add({
          xtype: "checkbox",
          boxLabel: t("allow_to_create_new_object"),
          name: "allowToCreateNewObject",
          value: 0
      });
    }

    return this.settingsPanel;
  }
})