pimcore.registerNS("cleanup.settings");

cleanup.settings = Class.create({
  initialize: function () {
    this.openfiles = {};

    this.panel = new Ext.Panel({
        id: "cleanup_settings",
        title: t("cleanup_settings_bundle_title"),
        iconCls: "icon_cleanup_settings_bundle",
        border: false,
        layout: "border",
        closable: true,
        items: []
    });

    var tabPanel = Ext.getCmp("pimcore_panel_tabs");
    tabPanel.add(this.panel);
    tabPanel.setActiveItem("pimcore_cleanup");

    this.panel.on("destroy", function () {
        pimcore.globalmanager.remove("pimcore_cleanup");
    }.bind(this));
  }
})