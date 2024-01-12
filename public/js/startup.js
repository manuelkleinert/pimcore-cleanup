pimcore.registerNS("cleanup.startup");

cleanup.startup = Class.create({
    initialize: function() {
        document.addEventListener(pimcore.events.preMenuBuild, this.preMenuBuild.bind(this));
    },

    preMenuBuild: function (event) {
        const menu = event.detail.menu;

        if (!menu.cleanup) {
            menu.cleanup = {
                label: t('cleanup_main_label'),
                iconCls: 'cleanup_nav_main_icon',
                items: [{
                    text: t("cleanup_project_doc_label"),
                    iconCls: "cleanup_nav_project_doc_icon",
                    itemId: 'cleanup_project_doc',
                    handler: this.showProjectDoc.bind(this),
                    priority: 10
                },
                    {
                        text: t("cleanup_pimcore_doc_label"),
                        iconCls: "cleanup_nav_pimcore_doc_icon",
                        itemId: 'cleanup_pimcore_doc',
                        handler: this.showPimcoreDoc.bind(this),
                        priority: 20
                    }],
                shadow: false,
                cls: "pimcore_navigation_flyout"
            };
        }
    },

    showProjectDoc: function () {
        this.loadUrl(Routing.generate('cleanup_bundle_project_doc'))
            .then(url => {
                pimcore.helpers.openGenericIframeWindow(
                    "cleanup_project_doc_frame",
                    url,
                    "cleanup_nav_project_doc_icon",
                    t("cleanup_project_doc_label")
                );
            })
            .catch(error => {
                console.error(error);
            });
    },

    showPimcoreDoc: function () {
        this.loadUrl(Routing.generate('cleanup_bundle_pimcore_doc'))
            .then(url => {
                pimcore.helpers.openGenericIframeWindow(
                    "cleanup_pimcore_doc_frame",
                    url,
                    "cleanup_nav_pimcore_doc_icon",
                    t("cleanup_pimcore_doc_label")
                );
            })
            .catch(error => {
                console.error(error);
            });
    },

    loadUrl: function (url, fn) {
        return new Promise((resolve, reject) => {
            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Fetch error: ${response.status} - ${response.statusText}`);
                    }
                    return response.json();
                })
                .then(data => {
                    resolve(data.hasOwnProperty('url')?data.url:'/404');
                })
                .catch(error => {
                    reject('/404');
                });
        });
    }
});

new cleanup.startup();