<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <froalaView v-model="content"></froalaView>
                </div>
            </div>
        </div>

        <div class="py-2 col-md-12">
            <froala :tag="'textarea'" :config="config" v-model="content">Init text</froala>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                content: "",
                config: {
                    width: '100%',
                    height: '280px',
                    events: {
                        'froalaEditor.initialized': function () {
                            console.log('initialized')
                        }
                    }
                }
            }
        }
    }
</script>