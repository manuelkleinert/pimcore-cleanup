pimcore.registerNS("cleanup.startup");

cleanup.startup = Class.create({
  initialize: function () {
    document.addEventListener(pimcore.events.preMenuBuild, this.preMenuBuild.bind(this));
  },

  preMenuBuild: function (event) {
    const menu = event.detail.menu;
    this.user = pimcore.globalmanager.get('user');
    this.toolbar = pimcore.globalmanager.get('layout_toolbar');
    const systemInfoMenuItems = this.getSystemInfoMenu();
    menu.settings.items.push(this.getSystemInfoMenu());
    systemInfoMenu.menu.items.push(item);
  },

  getSystemInfoMenu: function () {
    const user = pimcore.globalmanager.get('user');
    var perspectiveCfg = pimcore.globalmanager.get("perspective");
    if (
        (user.isAllowed('cleanup') || user.admin) &&
        perspectiveCfg.inToolbar("extras") &&
        perspectiveCfg.inToolbar("extras.cleanup")
    ) {
        return {
            text: t("pimcore_cleanup_settings"),
            iconCls: "pimcore_nav_icon_cleanup_settings",
            itemId: 'pimcore_menu_extras_cleanup_settings',
            handler: this.showCleanUpSettings,
            priority: 50
        };
    }
    return null;
  },

  showCleanUpSettings: function () {
    try {
        pimcore.globalmanager.get("bundle_clean_up_settings").activate();
    } catch (e) {
        pimcore.globalmanager.add("bundle_clean_up_settings", new cleanup.settings());
    }
  },
})

const cleanpSettings = new cleanup.startup();