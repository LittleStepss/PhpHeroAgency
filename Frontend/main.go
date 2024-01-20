package main

import (
    "encoding/json"
    "html/template"
    "log"
    "net/http"
)

type Hero struct {
    Name            string `json:"name"`
    SecretIdentity  string `json:"secret_identity"`
    Gender          string `json:"gender"`
    HairColor       string `json:"hair_color"`
    OriginalPlanet  string `json:"original_planet"`
}

func main() {
    http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
        resp, err := http.Get("http://127.0.0.1:8000/api/hero") 
        if err != nil {
            log.Fatal(err)
        }
        defer resp.Body.Close()

        var heroes []Hero
        if err := json.NewDecoder(resp.Body).Decode(&heroes); err != nil {
            log.Fatal(err)
        }

        tmpl := template.Must(template.ParseFiles("heroes.html")) 
        if err := tmpl.Execute(w, heroes); err != nil {
            log.Fatal(err)
        }
    })

    log.Fatal(http.ListenAndServe(":8080", nil)) 
}