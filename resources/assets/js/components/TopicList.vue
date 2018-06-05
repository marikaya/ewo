<template>
    <div>
        <div class="topic-list-header">
            <strong>gündem</strong>
            <a class="refresh-topic-list" href="#">
                <i class="icon-refresh"></i>
            </a>
            <span class="title-count">150/514</span>
        </div>
        <ul v-bind:style="getStyle" class="topic-list">
            <li>
                <a href="#" data-toggle="tooltip" data-placement="right" title="30 kişi okumuş">çay tiryakisi
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">downtown
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">xanthippe
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos hakkında öneriler
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çocuk eğitiminde yapılan hatalar
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos yazarlarının merak ettikleri
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">fabrika ayarlarına dönmek
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çay tiryakisi
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">downtown
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">xanthippe
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos hakkında öneriler
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çocuk eğitiminde yapılan hatalar
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos yazarlarının merak ettikleri
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">fabrika ayarlarına dönmek
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos hakkında öneriler
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çocuk eğitiminde yapılan hatalar
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos yazarlarının merak ettikleri
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">fabrika ayarlarına dönmek
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çay tiryakisi
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">downtown
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">xanthippe
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos hakkında öneriler
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çocuk eğitiminde yapılan hatalar
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">kulzos yazarlarının merak ettikleri
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">fabrika ayarlarına dönmek
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">çay tiryakisi
                    <span class="read-count">25</span>
                </a>
            </li>
            <li>
                <a href="#">downtown
                    <span class="read-count">25</span>
                </a>
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
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
                    height: (window.outerHeight - '280') + 'px',
                }
            }
        }
    }
</script>