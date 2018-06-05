<template>
    <div class="entry-lister" v-bind:style="getStyle">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        methods: {
            // whenever the document is resized, re-set the 'fullHeight' variable
            handleResize (event) {
                this.height = document.documentElement.clientHeight
            }
        },
        ready: function () {
            window.addEventListener('resize', this.handleResize)
        },
        beforeDestroy: function () {
            window.removeEventListener('resize', this.handleResize)
        },
        computed: {
            getStyle () {
                return {
                    height: (window.outerHeight - '250') + 'px',
                }
            }
        }
    }
</script>