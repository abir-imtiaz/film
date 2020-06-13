<template>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Release Date</th>
                <th>Rating</th>
                <th>Ticket Price</th>
                <th>Country</th>
                <th>Genre</th>
            </tr>
            <tr v-bind:key="post.id" v-for="post in posts.data">
                <td>{{post.id}}</td>
                <td>{{post.name}}</td>
                <td>{{post.description}}</td>
                <td>{{post.release_date}}</td>
                <td>{{post.rating}}</td>
                <td>{{post.ticket_price}}</td>
                <td>{{post.country}}</td>
                <td>{{post.genre}}</td>
            </tr>   
        </table> 
    </div>
</template>
<script>
import axios from 'axios';

export default {
  name: 'Home',
  data() {
    return {
        posts: [],
        post: {
            id: '',
            name: '',
            description: '',
            release_date: '',
            rating: '',
            ticket_price: '',
            country: '',
            genre: ''
        }, movie_id: '',
        pagination: {},
        edit: false
    }
  },
  methods: {
    
  },
  created() {
    axios.get('http://localhost:8000/api/posts')
      
    .then(res => this.posts = res.data)
    .catch(err => console.log(err));
  }
}
</script>
<style scoped>

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }

</style>