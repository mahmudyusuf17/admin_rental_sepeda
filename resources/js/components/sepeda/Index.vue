<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">SEPEDA</div>

                    <div class="card-body">
                        <router-link :to="{ name: 'create' }" class="btn btn-md btn-success">TAMBAH DATA</router-link>

                        <div class="table-responsive mt-2">
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th>MERK</th>
                                    <th>JENIS</th>
                                    <th>AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(sepeda, index) in sepedas" :key="sepeda.id">
                                    <td>{{ sepeda.merk }}</td>
                                    <td>{{ sepeda.jenis }}</td>
                                    <td class="text-center">
                                        <router-link :to="{name: 'edit', params: { id: sepeda.id }}" class="btn btn-sm btn-primary">EDIT</router-link>
                                        <button @click.prevent="sepedaDelete(sepeda.id, index)" class="btn btn-sm btn-danger">HAPUS</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                sepedas: {}
            }
        },
        created() {
            let uri = 'http://localhost:8000/api/admin/sepeda';
            this.axios.get(uri).then(response => {
                this.sepedas = response.data.data;
            });
        }
    }
</script>