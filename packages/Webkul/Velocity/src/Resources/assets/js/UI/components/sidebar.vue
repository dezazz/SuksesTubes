<template>
    <nav
        :id="id"
        @mouseover="remainBar(id)"
        :class="`sidebar ${addClass ? addClass : ''}`"
        v-if="slicedCategories && slicedCategories.length > 0"
    >
        <ul type="none" class="sidebar-main-category">
            <li
                :key="categoryIndex"
                :id="`category-${category.id}`"
                class="category-content cursor-pointer"
                @mouseout="toggleSidebar(id, $event, 'mouseout')"
                @mouseover="toggleSidebar(id, $event, 'mouseover')"
                v-for="(category, categoryIndex) in slicedCategories"
                v-if="category['name']"
            >
                <a
                    :href="`${$root.baseUrl}/${category.slug}`"
                    :class="`category unset ${
                        category.children.length > 0 ? 'fw6' : ''
                    }`"
                >
                    <div
                        class="category-icon"
                        @mouseout="toggleSidebar(id, $event, 'mouseout')"
                        @mouseover="toggleSidebar(id, $event, 'mouseover')"
                    >
                        <img
                            v-if="category.category_icon_url"
                            :src="category.category_icon_url"
                            width="20"
                            height="20"
                        />
                    </div>

                    <span class="category-title">{{ category['name'] }}</span>

                    <i
                        class="rango-arrow-right pr15 float-right mt-1"
                        @mouseout="toggleSidebar(id, $event, 'mouseout')"
                        @mouseover="toggleSidebar(id, $event, 'mouseover')"
                        v-if="
                            category.children.length &&
                            category.children.length > 0
                        "
                    >
                    </i>
                </a>

                <div
                    class="sub-category-container"
                    v-if="
                        category.children.length && category.children.length > 0
                    "
                >
                    <div
                        @mouseout="toggleSidebar(id, $event, 'mouseout')"
                        @mouseover="
                            remainBar(
                                `sidebar-level-${sidebarLevel + categoryIndex}`
                            )
                        "
                        :class="`sub-categories sub-category-${
                            sidebarLevel + categoryIndex
                        } cursor-default`"
                    >
                        <nav
                            class="sidebar"
                            :id="`sidebar-level-${
                                sidebarLevel + categoryIndex
                            }`"
                            @mouseover="
                                remainBar(
                                    `sidebar-level-${
                                        sidebarLevel + categoryIndex
                                    }`
                                )
                            "
                        >
                            <ul type="none">
                                <li
                                    :key="`${subCategoryIndex}-${categoryIndex}`"
                                    v-for="(
                                        subCategory, subCategoryIndex
                                    ) in category.children"
                                >
                                    <a
                                        @click="showChildCategory('ul' + subCategoryIndex)"
                                        :id="`sidebar-level-link-2-${subCategoryIndex}`"
                                        @mouseout="
                                            toggleSidebar(
                                                id,
                                                $event,
                                                'mouseout'
                                            )
                                        "
                                        
                                        :class="`category sub-category unset ${
                                            subCategory.children.length > 0
                                                ? 'fw6'
                                                : ''
                                        }`"
                                    >
                                        <div
                                            class="category-icon"
                                            @mouseout="
                                                toggleSidebar(
                                                    id,
                                                    $event,
                                                    'mouseout'
                                                )
                                            "
                                            @mouseover="
                                                toggleSidebar(
                                                    id,
                                                    $event,
                                                    'mouseover'
                                                )
                                            "
                                        >
                                            <img
                                                v-if="
                                                    subCategory.category_icon_url
                                                "
                                                :src="
                                                    subCategory.category_icon_url
                                                "
                                            />
                                        </div>

                                        <a class="category-title" :href="`${$root.baseUrl}/${category.slug}/${subCategory.slug}`">
                                            {{ subCategory['name'] }}
                                        </a>

                                        <i
                                            :class="`rango-arrow-${direction} pr15 float-right`"
                                            @mouseout="toggleSidebar(id, $event, 'mouseout')"
                                            @mouseover="toggleSidebar(id, $event, 'mouseover')"
                                            v-if="subCategory.children.length > 0"
                                        >
                                        </i>
                                    </a>

                                    <ul type="none" hidden :ref="'ul' + subCategoryIndex" class="child-category">
                                        <li
                                            :key="`${childSubCategoryIndex}-${subCategoryIndex}-${categoryIndex}`"
                                            v-for="(
                                                childSubCategory,
                                                childSubCategoryIndex
                                            ) in subCategory.children"
                                        >
                                            <a
                                                :id="`sidebar-level-link-3-${childSubCategoryIndex}`"
                                                :class="`category unset ${
                                                    subCategory.children
                                                        .length > 0
                                                        ? 'fw6'
                                                        : ''
                                                }`"
                                                :href="`${$root.baseUrl}/${category.slug}/${subCategory.slug}/${childSubCategory.slug}`"
                                            >
                                                <span class="category-title">{{
                                                    childSubCategory.name
                                                }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</template>

<script type="text/javascript">
export default {
    props: ['id', 'addClass', 'parentSlug', 'mainSidebar', 'categoryCount'],

    data: function () {
        return {
            slicedCategories: [],
            sidebarLevel: Math.floor(Math.random() * 1000),
            direction:"down"
        };
    },

    watch: {
        '$root.sharedRootCategories': function (categories) {
            this.formatCategories(categories);
        },
    },

    methods: {
        remainBar: function (id) {
            let sidebar = $(`#${id}`);

            if (sidebar && sidebar.length > 0) {
                sidebar.show();

                let actualId = id.replace('sidebar-level-', '');

                let sidebarContainer = sidebar.closest(
                    `.sub-category-${actualId}`
                );

                if (sidebarContainer && sidebarContainer.length > 0) {
                    sidebarContainer.show();
                }
            }
        },

        formatCategories: function (categories) {
            let slicedCategories = categories;
            let categoryCount = this.categoryCount ? this.categoryCount : 9;

            if (slicedCategories && slicedCategories.length > categoryCount) {
                slicedCategories = categories.slice(0, categoryCount);
            }

            if (this.parentSlug) {
                slicedCategories['parentSlug'] = this.parentSlug;
            }

            this.slicedCategories = slicedCategories;
        },

        showChildCategory: function (ref) {
            if (this.$refs[ref][0].hidden) {
                this.$refs[ref][0].hidden = false;
                this.direction = "up";
            } else {
                this.$refs[ref][0].hidden = true;
                this.direction = "down";
            }
        }
    },
};
</script>
